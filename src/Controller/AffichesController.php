<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AffichesController extends AbstractController
{
    #[Route('/affiches', name: 'affiches')]
    public function index(): Response
    {
        return $this->render('affiches/index.html.twig', [
            'controller_name' => 'AffichesController',
        ]);
    }
}
