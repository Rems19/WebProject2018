<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArtistController extends Controller
{
    /**
     * @Route("/", name="artists")
     */
    public function indexAction()
    {
        return $this->render('base.html.twig');
    }
}
