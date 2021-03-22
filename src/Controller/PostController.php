<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;
use App\Form\PostType;
use App\Repository\PostRepository;
use App\Entity\Post;



class PostController extends AbstractController
{
    #[Route('/post', name: 'post')]
    public function index(PostRepository $postRepo): Response
    {
        $allPosts = $postRepo->findAll();

        return $this->render('post/index.html.twig', [
            'allPosts' => $allPosts
        ]);
    }

    #[Route('/post/create', name: 'post_create')]
    public function create(Request $request,Security $security): Response
    {
      $post = new Post();
      $this->denyAccessUnlessGranted('create', $post);
      $form = $this->createForm(PostType::class, $post);

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()){

        $post->setCreatedAt(new \DateTime());
        $post->setIsPublished(true);
        $post->setIsDeleted(false);
        $post->setAuthor($security->getUser());

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($post);
        $manager->flush();

        return $this->redirectToRoute('post_show', ['id' => $post->getId()]);
      }


      return $this->render('post/create.html.twig', [
        'formPost' => $form->createView(),
      ]);
    }

    #[Route('/post/{id}', name: 'post_show')]
    public function show(PostRepository $postRepo,int $id): Response
    {
        $post = $postRepo->find($id);

        return $this->render('post/show.html.twig', [
            'post' => $post
        ]);
    }


}
