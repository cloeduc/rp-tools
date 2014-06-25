<?php

namespace CDuc\CampagneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CDucCampagneBundle:Default:index.html.twig', array('name' => $name));
    }
}
