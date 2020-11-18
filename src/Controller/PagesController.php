<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * je créé une route avec dans l'url une "wildcard"
     * pour simplifier l'url
     *
     * @Route("/article/{id}", name="article_display")
     *
     * je mets en parametre de la méthode une variable $id de la wildcard
     * pour récupère ma valeur de la wildcard dans la variable
     */
    public function articleDisplay($id)
    {

        // Je créé un tableau dans une variable $articles pour pouvoir les récupérer quand
        // je souhaite afficher un de ces articles
        $articles = [
            1 => 'Article 1',
            2 => "Article 2",
            3 => "Article 3",
            4 => 'Article 4',
            5 => "Article 5",
            6 => "Article 6",
        ];

        // Je récupère mon article dans le tableau à l'aide du paramètre
        // id indiqué dans l'url
        $article =  $articles[$id];

        // j'utilise la méthode render propre à la classe AbstractController
        // qui va chercher mon fichier .html.twig (dans le dossier templates)
        // puis le traduire en HTML et le renvoyer en tant que réponse du Protocole HTTP


        // En second paramètre, je créé un tableau pour introduire mes variables twig écrites
        // dans mon fichier twig et les lier à mes variables PHP dans le Controller
        return $this->render('twigshow.html.twig', [
            'article' => $article
        ]);

    }

    /**
     *
     * @Route("/profile", name="profile_show")
     *
     */
    public function profileShow()
    {
        // Je créé un tableau dans une variable $profile pour pouvoir récupèrer les informations
        // de mon utilisateur. C'est un array avec à index string

        $profile = [
            "firstname" => "Flantier",
            "name" => "Noel",
            "age" => 40,
            "job" => "secret agent",
            "active" => true
        ];

        // j'utilise la méthode render propre à la classe AbstractController
        // qui va chercher mon fichier .html.twig (dans le dossier templates)
        // puis le traduire en HTML et le renvoyer en tant que réponse du Protocole HTTP

        // je passe en second parametre de la méthode render
        // un tableau (array) qui contient toutes les variables
        // que je veux utiliser dans twig
        // Tant que je n'envoie pas les variables au fichier twig
        // je ne peux pas les appeler car c'est un fichier séparé
        return $this->render('article.html.twig', [
            'profile' => $profile
        ]);
    }
}