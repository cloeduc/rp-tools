<?php

namespace CDuc\CharracterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function defineCharacterAction()
    {
    	
        return $this->render('CDucCharracterBundle:Default:index.html.twig', array('name' => $name));
    }
}
