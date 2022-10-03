<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        $nom = "Jordan";
        $age = 21;
        $tabNom = [
            "Max" => 26,
            "Yann" => 24, 
            "Simon" => 27,
            "Gauthier" => 26
        ];

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'myname' => $nom,
            "age" => $age,
            "tableau" => $tabNom
        ]);
    }


    #[Route("/test", name:"app_test")]
    public function test(): Response
    {
        return $this->render('home/test.html.twig',[]);
    }

}
