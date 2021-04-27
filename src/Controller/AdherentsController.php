<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdherentsController extends AbstractController
{
    /**
     * @Route("/adherents", name="adherents")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(User::class);

        $users = $repo->findAll(); 

        return $this->render('adherents/index.html.twig', [
            'controller_name' => 'AdherentsController',
            'users' => $users
        ]);
    }
}
