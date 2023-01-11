<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrancaisController extends AbstractController
{
    #[Route('/Loisirs', name: 'app_Loisirs')]
    public function index(): Response
    {
        return $this->render('Loisirs/index.html.twig', [
            'controller_name' => 'LoisirsController',
        ]);
    }
}
