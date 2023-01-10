<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColombatClementController extends AbstractController
{
    #[Route('/colombat', name: 'app_colombat_clement')]
    public function index(): Response
    {
        return $this->render('colombat_clement/index.html.twig', [
            'controller_name' => 'ColombatClementController',
        ]);
    }
}
