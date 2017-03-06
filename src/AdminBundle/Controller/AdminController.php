<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
        /**
     * @Route("/admin" , name="admin")
     */
    public function indexAction()
    {      
         $em = $this -> getDoctrine();
         $blague = $em->getRepository('AdminBundle:Blague')->findAll();
         return $this->render('default/admin.html.twig', array(
             'blague' => $blague));   
    }
}
