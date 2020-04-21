<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomePageController extends AbstractController
{
    /**
     * @Route("/accueil", name="app_accueil")
     */
    public function index()
    {
        return $this->render('welcome_page/homepage.html.twig', [
            'controller_name' => 'WelcomePageController',
        ]);
    }

    /**
     * @Route("/accueil/faq", name="app_faq")
     */
    public function faq()
    {
        return $this->render('welcome_page/faq.html.twig');
    }
}
