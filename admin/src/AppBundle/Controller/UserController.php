<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    public function UserNewAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_user_user');
        }
        
        return $this->render('AppBundle:User:user_new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/UserEdit/{id}")
     */
    public function UserEditAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');

        $user = $repository->find($id);
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            
            
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_user_user');
        }
        
        return $this->render('AppBundle:User:user_edit.html.twig', array(
             'form' => $form->createView()
        ));
    }

    /**
     * @Route("/UserDelete/{id}")
     */
    public function UserDeleteAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');

        $user = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('app_user_user');
    }

}
