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


    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('colombat/cv.html.twig', [
            'controller_name' => 'CvController',
        ]);
    }


    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('francais/portfolio.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }

    #[Route('/loisirs', name: 'app_loisirs')]
    public function loisirs(): Response
    {
        return $this->render('francais/loisirs.html.twig', [
            'controller_name' => 'LoisirsController',
        ]);
    }

}




