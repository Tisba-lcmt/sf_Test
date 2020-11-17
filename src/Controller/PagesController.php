<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * Je créé la route de ma page d'accueil en application le principe du rooting
     * de Symfony avec un nom unique
     *
     * @Route("/home", name="homepage")
     *
     */

    // Je créé une méthode home pour retourner une redirection sous forme de réponse du protocole HTTP
    public function home()
    {
       return new Response("Page d'accueil");
    }

    /**
     * Je créé la route de ma page formulaire
     *
     * @Route("/form", name="formpage")
     */

    // Je créé une méthode form pour afficher un message de confirmation d'envoi de formulaire
    // Sinon j'effectue une redirection sur ma page d'accueil

    public function formPage()
    {
        // J'indique que mon formulaire a été remplie sous forme de booléen
        $isFormSubmitted = true;

        // Si le formulaire n'est pas remplie je lui indique qu'il faut le remplir
        // sinon je le redirige sur la page d'accueil du site

        if (!$isFormSubmitted) {
            // Je retourne une réponse HTTP pour afficher un message à l'utilisateur
            return new Response("Merci de remplir le formulaire");
        } else {
            // Je retourne une réponse HTTP pour afficher un message à l'utilisateur
            return $this->redirectToRoute('homepage');
        }
    }
}