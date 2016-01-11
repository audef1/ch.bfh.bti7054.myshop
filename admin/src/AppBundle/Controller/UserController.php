<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("/User")
     */
    public function UserAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');
        $users = $repository->findAll();
        
        return $this->render('AppBundle:User:user.html.twig', array(
            'users' => $users
        ));
    }

    /**
     * @Route("/UserNew")
     */
    public function UserNewAction()
    {
        $user = new Category();
        $form = $this->createForm(CategoryType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_category_category');
        }
        
        return $this->render('AppBundle:User:user_new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/UserEdit")
     */
    public function UserEditAction()
    {
        return $this->render('AppBundle:User:user_edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/UserDelete")
     */
    public function UserDeleteAction()
    {
        return $this->render('AppBundle:User:user_delete.html.twig', array(
            // ...
        ));
    }

}
