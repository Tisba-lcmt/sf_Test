<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AgentController extends AbstractController
{
    /**
     * Je créé la route agent qui sera la nouvelle url de notre site et qui prend en compte le principe
     * de routing de Symfony avec son nom approprié
     * J'indique la wildcard en url qui sera remplie par l'id dans mon tableau
     * multidimensionnel agents
     * @Route("/agent/{id}", name="agent_show")
     */
    // on créé une méthode agentShow qui sera appelée quand l'url "/agent/{id}"
    // Elle est appelée automatiquement car la route est définie au dessus de la méthode

    // J'indique dans en paramètre de ma méthode $id pour demander à Symfony de mettre la valeur id de mon
    // tableau en wildcard
    public function agentShow($id)
    {
        // Tableau multidimensionnel $agents
        $agents = [
            1 => [
                "id" => 1,
                "lastName" => "Robert",
                "firstName" => "David",
                "age" => 30,
                "published" => true
            ],
            2 => [
                "id" => 2,
                "lastName" => "Labaste",
                "firstName" => "Denis",
                "age" => 29,
                "published" => true
            ],
            3 => [
                "id" => 3,
                "lastName" => "Rozand",
                "firstName" => "Mathieu",
                "age" => 31,
                "published" => false
            ],
            4 => [
                "id" => 4,
                "lastName" => "Despert",
                "firstName" => "Yoann",
                "age" => 33,
                "published" => true
            ],
            5 => [
                "id" => 5,
                "lastName" => "Dorignac",
                "firstName" => "Loic",
                "age" => 34,
                "published" => false
            ]
        ];

        // J'utilise la méthode render issue de Abstract Controller qui va retourner mon fichier twig
        // pour le compiler en html afin de le renvoyer en réponse HTTP sur la navigateur

        // En second paramètre du render, je créé un tableau qui contient ma variable twig correspondant
        // à l'id de mon tableau agents
        return $this->render('agents.html.twig', [
           'agents'=>$agents[$id]
        ]);
    }

    /**
     * Je créé la route agent qui sera la nouvelle url de notre site et qui prend en compte le principe
     *  de routing de Symfony avec son nom approprié
     * @Route("/agent", name="agent_list")
     */

    // on créé une méthode agentList qui sera appelée quand l'url "/agent"
    // Elle est appelée automatiquement car la route est définie au dessus de la méthode
    public function agentList()
    {
        $agents = [
            1 => [
                "id" => 1,
                "lastName" => "Robert",
                "firstName" => "David",
                "age" => 30,
                "published" => true
            ],
            2 => [
                "id" => 2,
                "lastName" => "Labaste",
                "firstName" => "Denis",
                "age" => 29,
                "published" => true
            ],
            3 => [
                "id" => 3,
                "lastName" => "Rozand",
                "firstName" => "Mathieu",
                "age" => 31,
                "published" => false
            ],
            4 => [
                "id" => 4,
                "lastName" => "Despert",
                "firstName" => "Yoann",
                "age" => 33,
                "published" => true
            ],
            5 => [
                "id" => 5,
                "lastName" => "Dorignac",
                "firstName" => "Loic",
                "age" => 34,
                "published" => false
            ]
        ];

        // J'utilise la méthode render issue de Abstract Controller qui va retourner mon fichier twig
        // pour le compiler en html afin de le renvoyer en réponse HTTP sur la navigateur

        // En second paramètre du render, je créé un tableau qui contient ma variable twig correspondant
        // à l'id de mon tableau agents
        return $this->render('agent.html.twig', [
            'agents'=>$agents
        ]);
    }
}