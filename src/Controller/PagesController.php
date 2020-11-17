<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController
{
    /**
     * @Route("/article", name="article_display")
     *
     * Dans les paramètres de ma méthod articleDisplay je place la classe Request
     * propre à Symfony en mode autowire qui va instancier cette classe
     * dans une variable $request
     */
    public function articleDisplay(Request $request)
    {
        // j"utilise la classe Request pour récupérer l'id de mon url en méthode get
        $monArticle = $request->query->get('id');

        // Je créé un tableau dans une variable $articles pour pouvoir les récupérer quand
        // je souhaite récupérer un de ces articles
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
        $response = new Response('<h1>'.$articles[$monArticle].'</h1>');

        // je retourne ma réponse sur le navigateur
        return $response;
    }
}