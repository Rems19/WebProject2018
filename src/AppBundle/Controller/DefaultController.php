<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction()
    {
        return $this->render('home.html.twig', [
            'page_head' => 'Découvrez le meilleur de la musique !',
            'box_head' => 'Notre but ?'
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function indexAction()
    {
        return $this->render('about.html.twig',[
            'page_head' => 'Qui sommes-nous?',
            'box_head' => 'Tout d\'abord, une découverte'
        ]);

    }
}
