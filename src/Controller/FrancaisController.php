<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrancaisController extends AbstractController
{
    #[Route('/francais', name: 'app_francais')]
    public function index(): Response
    {
        return $this->render('francais/index.html.twig', [
            'controller_name' => 'FrancaisController',
        ]);
    }

    #[Route('/loisirs', name: 'app_loisirs')]
    public function loisirs(): Response
    {
        return $this->render('/loisirs.html.twig', [
            'controller_name' => 'FrancaisController',
        ]);
    }
    
}



