<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig');
    }

    #[Route('/persos', name: 'personnages')]
    public function persos(): Response
    {
        return $this->render('personnage/persos.html.twig',[
            "pseudo" => "toto",
            "age" => 25,
            "carac" => [
                "force" => 3,
                "agi" => 2,
                "intel" => 3
            ]

        ]);
    }
}
