<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdherentsCreationController extends AbstractController
{
    /**
     * @Route("/adherents/creation", name="adherents_creation")
     */
    public function index(): Response
    {
        return $this->render('adherents_creation/index.html.twig', [
            'controller_name' => 'AdherentsCreationController',
        ]);
    }
}
