<?php

namespace AAF\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller{
    
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('AAFUserBundle:User')->findAll();
        
        /*$res = 'Lista de usuarios: <br />';
        
        foreach($users as $user){
            $res .= 'Usuario: ' . $user->getUsername() . ' - Email: ' . $user->getEmail() . '<br />';
        }
        
        return new Response($res);*/
        
        return $this->render('AAFUserBundle:User:index.html.twig', array('users' => $users));
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
