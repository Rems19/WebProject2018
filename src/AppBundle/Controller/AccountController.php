<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AccountController extends Controller
{
    /**
     * @Route("/login")
     * @Method("GET")
     */
    public function showLogin(Request $request)
    {
        $error = $request->query->get('error');
        return $this->render('form.html.twig', [
            'title' => 'Connection',
            'error' => $error,
            'fields' => [
                [
                    'name' => 'username',
                    'placeholder' => 'Username',
                    'type' => 'text'
                ],
                [
                    'name' => 'password',
                    'placeholder' => 'Password',
                    'type' => 'password'
                ]
            ],
            'submit' => 'Login',
            'method' => 'post',
            'action' => '/login'
        ]);
    }

    /**
     * @Route("/login")
     * @Method("POST")
     */
    public function doLogin(Request $request) {
        $username = $request->request->get('username');
        $password = $request->request->get('password');

        if (empty($username) || empty($password)) {
            return $this->redirect('/login?error=Please enter your credentials...');
        }

        return new Response('Ok', 200);
    }

    /**
     * @Route("/register")
     * @Method("GET")
     */
    public function showRegister(Request $request) {
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
