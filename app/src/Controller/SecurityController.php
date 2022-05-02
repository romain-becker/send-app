<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
  /**
     * @Route ("/api/register", name="register_user")
     */
    public function register(Request $request, EntityManagerInterface $managerRegistry, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $managerRegistry->persist($user);
            $managerRegistry->flush();
        }

        return $this->render('security/registration.html.twig',[
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route ("/api/login", name="app_login", methods={"POST"})
     */
    public function login(Request $request): Response
    {
        $user= $this->getUser();
        return $this->json([
            'email' => $user->getUsername(),
            'roles' => $user->getRoles()
        ]);
    }
}
