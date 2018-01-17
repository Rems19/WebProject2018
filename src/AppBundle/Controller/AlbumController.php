<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlbumController extends Controller
{
    /**
     * @Route("/", name="albums")
     */
    public function indexAction()
    {
        return $this->render('base.html.twig');
    }
}
