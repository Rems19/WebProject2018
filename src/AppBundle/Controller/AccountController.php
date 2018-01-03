<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
        return $this->render('security/login.html.twig', [
            'error' => $authUtils->getLastAuthenticationError()
        ]);
    }

    /**
     * @Route("/account/register", name="register")
     * @Method("GET")
     */
    public function showRegister(Request $request)
    {
        $error = $request->query->get('error');
        return $this->render('form.html.twig', [
            'title' => 'Registration',
            'error' => $error,
            'fields' => [
                [
                    'name' => 'username',
                    'placeholder' => 'Username',
                    'type' => 'text'
                ],
                [
                    'name' => 'email',
                    'placeholder' => 'Email',
                    'type' => 'email'
                ],
                [
                    'name' => 'password',
                    'placeholder' => 'Password',
                    'type' => 'password'
                ],
                [
                    'name' => 'password-conf',
                    'placeholder' => 'Confirm Password',
                    'type' => 'password'
                ]
            ],
            'submit' => 'Register',
            'method' => 'post',
            'action' => '/register'
        ]);
    }
}
