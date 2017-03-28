<?php

namespace Practo\MDS\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PractoMdsBundle:Default:index.html.twig');
    }
}
