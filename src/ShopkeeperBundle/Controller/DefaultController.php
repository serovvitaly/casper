<?php

namespace ShopkeeperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ShopkeeperBundle:Default:index.html.twig', array('name' => $name));
    }
}
