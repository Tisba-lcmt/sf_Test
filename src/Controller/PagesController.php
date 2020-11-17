<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController
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

        // je créé une réponse de mon serveur Apache du Protocole HTTP
        // avec l'article que j'ai indiqué dans mon url à l'aide du paramètre id
        $response = new Response('<h1>'.$articles[$id].'</h1>');

        // je retourne ma réponse sur le navigateur
        return $response;
    }
}