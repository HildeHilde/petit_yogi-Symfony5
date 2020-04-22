<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubscriptionController extends AbstractController
{
    /**
     * @Route("/subscribe", name="app_subscribe")
     */
    public function index()
    {
        return $this->render('subscription/subscribe.html.twig');   
    }
}
