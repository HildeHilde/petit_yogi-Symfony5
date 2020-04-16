<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomePageController extends AbstractController
{
    /**
     * @Route("/welcome/page", name="welcome_page")
     */
    public function index()
    {
        return $this->render('welcome_page/index.html.twig', [
            'controller_name' => 'WelcomePageController',
        ]);
    }
}
