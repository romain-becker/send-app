<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentification\AuthentificationUtils;
use App\Entity\User;


class UserController extends AbstractController

{

   

    /**
     * @Route ("/api/users/{$id}", name="app_user_modify", methods={"PUT"})
     */
    public function modify_user(Request $request,int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        
        if (!$user){
            return $this->json('error: no user found', 404);
        }
        $parameter = json_decode($request->getContent(),true);
        $user->setLogin($parameter['login']);
        $user->setPassword($parameter['password']);
        $user->setEmail($parameter['email']);
        $user->setFirstname($parameter['firstname']);
        $user->setLastname($parameter['lastname']);
        $em->flush();

        $data []= [
            'login' => $user->getLogin(),
            'passord' => $user->getPassword(),
            'email' => $user->getEmail(),
            'firstname' => $user->getFirstname(),
            'lastname' => $user->getLastname()
        ];

        return $this->json($data,200);
    }


     /**
     * @Route ("/api/users", name="app_user", methods={"GET"})
     */
    public function display_user(): Response
    {
        $user = $this->getDoctrine()
        ->getRepository(User::class)
        -> findAll();

        if (!$user){
            return $this->json('No project found', 404);
        }

        $data = [];

        foreach ($user as $user){
            $data[] = [
                'id' => $user->getId(),
                'login' => $user->getLogin(),
                'email' => $user->getEmail(),
                'firstname' => $user->getFirstname(),
                'lastname' => $user->getLastname()
            ];
        }

        return $this->json($data,200,["Content-Type"=>"application/json"]);
    }
    
}
