<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FlyersController extends AbstractController
{
    #[Route('/flyers', name: 'flyers')]
    public function index(): Response
    {
        return $this->render('flyers/index.html.twig', [
            'controller_name' => 'FlyersController',
        ]);
    }
}
