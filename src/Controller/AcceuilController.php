<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    #[Route('', name: 'acceuil')]
    public function index(): Response
    {
        //dd($this->getUser()); // équivalent de app.user en twig

        return $this->render('acceuil/index.html.twig', []);
    }
}
