<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SubscriptionController extends AbstractController
{
    /**
     * @Route("/subscribe", name="app_subscribe")
     */
    public function subscribe()
    {
       
        return $this->render('subscription/subscribe.html.twig', [
            'controller_name' => 'SubscriptionController',
        ]);
    }
}
