<?php

namespace AAF\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller{
    
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('AAFUserBundle:User')->findAll();
        
        $res = 'Lista de usuarios: <br />';
        
        foreach($users as $user){
            $res .= 'Usuario: ' . $user->getUsername() . '<br />';
        }
        
        return new Response($res);
    }
    
    public function viewAction($id){
        
        $repository = $this->getDoctrine()->getRepository('AAFUserBundle:User');
        
        $user = $repository->find($id);
        
        if(!$user){
            return new Response('No existe el usuario para ese ID.');
        }else{
            return new Response('Usuario: ' . $user->getUsername());   
        }
    }
    
    
}
