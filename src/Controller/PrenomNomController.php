<?php
// J'indique le chemin de ma class AgeMajoriteController
namespace App\Controller;

// J'indique le chemin de ma class Request du protocole HTTP qui se positionne
// dans les paramètres de la méthode de ma class
use Symfony\Component\HttpFoundation\Request;

// J'indique le chemin de ma class Response du protocole HTTP qui se positionne
// dans les paramètres de la méthode de ma class
use Symfony\Component\HttpFoundation\Response;

// J'indique le chemin de ma class Route qui se positionne dans
// l'Annotation de ma class PrenomNomController
use Symfony\Component\Routing\Annotation\Route;

// Je nomme ma class avec un nom qui caractérise au mieux sa fonctionnalité
class PrenomNomController
{
    // Je créé la route/le chemin de ma page avec un nom unique
    /**
     * @Route("/nom/prenom", name="nom_prenom")
     */

    // Je créé une fonction qui peut être appelée extérieurement avec un nom précis
    // J'indique ses paramètres entre ()
    // Le paramètre Request est une class propre à symphony qui permet de récupérer les élements
    // en mode Get que j'instancie ensuite dans une variable
    // Cette variable porte un nom logique à sa fonctionnalité
    public function user(Request $request)
    {
        // Je récupère le prenom que j'ai tapé dans l'url suivi du paramètre ?prenom =
        // Et je l'introduis dans une variable $prenom
        $prenom = $request->query->get('prenom');

        // Je récupère le nom que j'ai tapé dans l'url suivi du paramètre ?nom =
        // Et je l'introduis dans une variable $prenom
        $nom = $request->query->get('nom');

        // Je place dans une balise HTML <p> la variable $prenom et le $nom
        // Je place le résultat dans la variable $user pour la réponse du server
        $user = "<p>" . $prenom . " " . $nom . "</p>";

        // Je créé ma class Response propre à Symphony qui contient ma variable $user
        // que j'introduis dans une variable $response
        $response = new Response($user);

        // Je retourne ma reponse
        return $response;
    }
}