<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPublished;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDeleted;

    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="postUser")
    */
    private $author;

    /**
    * @ORM\OneToMany(targetEntity="Comment", mappedBy="postComment")
    */
    private $commentPost;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;


    public function __construct()
    {
        $this->commentPost = new ArrayCollection();
    }

    /**
     * @return Collection|Comment[]
     */
    public function getCommentPost(): Collection
    {
        return $this->commentPost;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->commentPost->contains($comment)) {
            $this->commentPost[] = $comment;
            $comment->setPost($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->commentPost->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getPost() === $this) {
                $comment->setPost(null);
            }
        }

        return $this;
    }


    // public function getCommentPost(): Comment
    // {
    //     return $this->commentPost;
    // }
    //
    //
    // public function setCommentPost(Comment $commentPost): void
    // {
    //     $this->commentPost = $commentPost;
    // }

    public function getAuthor(): ?User
    {
      return $this->author;
    }

    public function setAuthor(User $author): void
    {
      $this->author = $author;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    public function setIsPublished(bool $isPublished): self
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * Méthode toString. Retourne le title de l'article.
     */
    public function __toString(): string
    {
        return $this->title;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
