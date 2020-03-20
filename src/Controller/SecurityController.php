<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils){
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUserName = $authenticationUtils->getLastUsername();
        return $this->render("security/login.html.twig", 
        [
            "last_user_name" => $lastUserName,
            "error" => $error

        ]);
    }



}