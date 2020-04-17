<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Member;
use App\Form\MemberType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserProfileController extends AbstractController
{
    /**
     * @Route("/user/profile", name="user_profile")
     */
    public function index(Request $request)
    {
        //Permet d'atteindre l'entity User dans le template
        $this->getUser();

        //Creation du formulaire pour creer un membre
        $member = new Member();

        $form = $this->createForm(MemberType::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            //Ici on lie le User au Membre grace a l'id_user
            $userMembre = $entityManager->getRepository(User::class)->findOneBy(array('id' => $this->getUser()->getId()));
            $member->setUser($userMembre);

            $entityManager->persist($member);
            $entityManager->flush();
        }

        return $this->render('user_profile/user.profile.html.twig', [
            'formulaire' => $form->createView(),
        ]);
    }
}
