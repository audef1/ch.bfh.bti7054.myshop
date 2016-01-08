<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/")
     */
    public function AdminAction()
    {
        return $this->render('AppBundle:Admin:admin.html.twig', array(
            // ...
        ));
    }

}
