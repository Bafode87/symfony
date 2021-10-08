<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class FifaFrontController extends AbstractController
{
    #[Route('/fifa/front', name: 'fifa_front')]
    public function index(): Response
    {
//        $em = $this->getDoctrine()->getManager();
//        $user = new User();
//        $user->setEmail('test@test.fr')
//            ->setPassword($hasher->hashPassword($user,'bafode'));
//        $em->persist($user);
//        $em->flush();

        return $this->render('fifa_front/index.html.twig', [
            'controller_name' => 'FifaFrontController',
        ]);
    }
}
