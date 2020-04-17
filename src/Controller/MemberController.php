<?php

namespace App\Controller;

use App\Entity\Member;
use App\Form\MemberType;
// use App\Form\MemberFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MemberController extends AbstractController
{
    /**
     * @Route("/member", name="form_member")
     */
    // public function leFormulaire(Request $request)
    // {
    //     $member = new Member();

    //     $form = $this->createForm(
    //         MemberFormType::class,
    //         $member,
    //         [
    //             'method' => 'POST', 'action' => $this->generateUrl('form_member')
    //         ]
    //     );

    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid())
    //     {
    //         $form->getData();

    //         $entityManager = $this->getDoctrine()->getManager();
    //         $entityManager->persist($member);
    //         $entityManager->flush();
    //     }

        
    //     return $this->render('member/form_member.html.twig', ['formulaire' => $form->createView()]);
    // }

    public function new(Request $request)
    {
        $Member = new Member();
        // ...

        $form = $this->createForm(MemberType::class, $Member);

        return $this->render('member/form_member.html.twig', [
            'formulaire' => $form->createView(),
        ]);
    }
}
