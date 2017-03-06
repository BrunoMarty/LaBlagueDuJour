<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ClientController extends Controller
{
    /**
     * @Route("/",name="client")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $blagues = $em->getRepository('AdminBundle:Blague')->findAll();

        return $this->render('default/client.html.twig', array(
            'blagues' => $blagues,
        ));
    }
}
