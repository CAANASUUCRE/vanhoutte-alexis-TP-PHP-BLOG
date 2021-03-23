# vanhoutte-alexis-TP-PHP-BLOG
TP3 symfony

## Quelles sont les fonctionnalités principales du symfony CLI ?
Installer des composants pour le projet

## Relations entres les entités
![alt text](https://cdn.discordapp.com/attachments/813745980553166860/815888610573942795/unknown.png)

## Expliquer le fichier .env
Fichier où toutes les variables d'environnement sont initialisés

## Explisquer pourquoi il faut changer le connecteur à la BDD 
Pour choisir quel type de bdd on utilise (sqlite,postgresql,mysql...)

## Intérêt des migrations d'une BDD
Lorsqu'on change les relations ou les entités, les migrations mettent à jour la structure de la BDD.

## Qu'est-ce que EasyAdmin ? 
Module Symfony pour créer des page d'administration sur le site.

## Pourquoi doit-on implémenter des méthodes to string dans nos entités? 
Pour pouvoir les utiliser dans le dashboardController

## Qu'est-ce que le ParamConverter ? À quoi sert le Doctrine Param Converter ? 
Lorsqu'on fait une requête, ParamConverter va convertir les paramètres en objet

*Source: https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/converters.html*

## Qu'est-ce qu'un formulaire Symfony ? 
C'est un formulaire qui va être basé sur une entité

## Quels avantages offrent l'usage d'un formulaire ? 
La création de ces formulaires est simple et rapide. On peut aussi les personnaliser facilement.

## Quelles sont les différentes personalisations de formulaire qui peuvent être faites dans Symfony ? 
On peut appliquer un thème :
- à tous les formulaires
- à un formulaire spécifique
- à un groupe de formulaire

## Définir les termes suivants : Encoder, Provider, Firewall, Access Control, Role, Voter 

Encoder : Composant permettant de choisir l'algorithme d'encodage<br/>
Provider : Pour l'authentification par exemple, le Provider va checker si l'utilisateur est présent dans la base de données pour ensuite le connecter<br/>
Firewall : C'est ce qui permet de sécuriser le site, restreindre l'accés a certaines parties du site lors de l'authentification<br/>
Access Control : C'est ce qui gère les autorisation, supprimer un Post si on est admin par exemple.<br/>
Role : Permet d'attribuer des roles aux utilisateurs. Par exemple le role Administrateur avec ROLE_ADMIN<br/>
Voter : Cela permet de vérifier les permissions d'un utilisateur<br/>

## Qu'est-ce que FOSUserBundle ? Pourquoi ne pas l'utiliser ? 
FOSUserBundle permet de gérer les utilisateur plus facilement.<br/>
On ne l'utilise pas car ce bundle n'est pas obligatoire pour gérer les utilisateurs<br/>

## Définir les termes suivants : Argon2i, Bcrypt, Plaintext, BasicHTTP 44

Argon2i : Fonction de dérivation de clé. Permet de crypter une chaine de caractère<br/>
Bcrypt : Fonction de hachage. Permet de crypter une chaine de caractère<br/>
Plaintext : Plaintext veut dire "texte en clair".<br/>
BasicHTTP : Validation des requêtes HTTP<br/>

## Expliquer le principe de hachage. 

Le hachage permet de transformer une chaîne en une autre chaîne compliqué à décrypter, utile pour les mots de passe dans les BDD.

## Faire un schema expliquant quelle méthode est appelée dans quel ordre dans le LoginFormAuthenticator . Définir l'objectif de chaque méthodes du fichier. 

## À quoi sert un service dans Symfony ?
C'est une classe qui va gérer "une tâche globale", par exemple envoyer un mail.

## Avez-vous déjà utilisé des services dans ce projet ? Si oui, lesquels ?
Oui, L'envoie de mail.

## Définir les termes suivant : Dependency Injection, Service, Autowiring, Container
Dependency Injection : Cela va créer des dépendances entre les classes.<br/>
Service : C'est une classe qui va gérer "une tâche globale", par exemple envoyer un mail.<br/>
Autowiring : Permet de lier des services à des méthodes automatiquement.<br/>
Container : Un Container permet de rendre un service plus facile a utiliser et favorise une architecture forte, en y proposant le choix des arguments<br/>

## Quelle importance a les services dans le fonctionnement de Symfony ? 


## À quoi sert le validateur ? Dans quel contexte peut-on valider des données ?
Valider le bon remplissage d'un formulaire.<br/>
On peut valider les données lorsque l'utilisateur rempli correctement les champs.<br/>

## Quels sont les différentes parties du Serializer et à quoi servent-elles ? 

Dans le serializer, il y a des normalizer et des encoders :<br/>
Normalizer : cela sert a transformer des objets en tableau et vice-versa.<br/>
Encoders : JsonEncoder,XmlEncoder etc...<br/>






