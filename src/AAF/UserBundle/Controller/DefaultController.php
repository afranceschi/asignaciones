<?php

namespace AAF\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{
    
    public function indexAction(){
        return $this->render('AAFUserBundle:Default:index.html.twig');
    }
}
