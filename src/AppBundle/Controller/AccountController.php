<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AccountController extends Controller
{
    /**
     * @Route("/account/login", name="login")
     */
    public function showLogin(UserInterface $user = null, AuthenticationUtils $authUtils)
    {
        if ($user != null)
        {
            return $this->redirect($this->generateUrl('homepage'));
        }
        return $this->render(':security:login.html.twig', [
            'error' => $authUtils->getLastAuthenticationError()
        ]);
    }

    /**
     * @Route("/account/register", name="register")
     */
    public function showRegister(UserInterface $user = null)
    {
        if ($user != null)
        {
            return $this->redirect($this->generateUrl('homepage'));
        }
        return $this->render(':security:register.html.twig', [
            'error' => null
        ]);
    }
}
