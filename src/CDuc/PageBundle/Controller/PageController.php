<?php

namespace CDuc\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PageController extends Controller
{
    /**
    * @Template()
    */
    public function showAction($id)
    {
        $page = $this->get('page.page_manager')->load($id); 
        return array('page' => $page);
    }
}
