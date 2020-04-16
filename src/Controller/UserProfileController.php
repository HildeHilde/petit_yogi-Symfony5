<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserProfileController extends AbstractController
{
    /**
     * @Route("/user/profile", name="user_profile")
     */
    public function index()
    {
        $this->getUser();
        return $this->render('user_profile/user.profile.html.twig', [
            'controller_name' => 'UserProfileController',
        ]);
    }
}
