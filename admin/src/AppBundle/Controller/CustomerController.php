<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use AppBundle\Form\CustomerType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CustomerController extends Controller {

    /**
     * @Route("/Customer")
     */
    public function CustomerAction() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customer');
        $customers = $repository->findAll();

        return $this->render('AppBundle:Customer:customer.html.twig', array(
                    'customers' => $customers
        ));
    }

    /**
     * @Route("/CustomerEdit/{id}")
     */
    public function CustomerEditAction(Request $request, $id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customer');

        $customer = $repository->find($id);
        $form = $this->createForm(CustomerType::class, $customer);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $customer = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();

            return $this->redirectToRoute('app_customer_customer');
        }

        return $this->render('AppBundle:Customer:customer_edit.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/CustomerDelete")
     */
    public function CustomerDeleteAction(Request $request, $id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Customer');

        $customer = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($customer);
        $em->flush();

        return $this->redirectToRoute('app_category_category');
    }

    /**
     * @Route("/CustomerNew")
     */
    public function CustomerNewAction(Request $request) {
        $customer = new Customer();
        $form = $this->createForm(CustomerType::class, $customer);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $customer = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();

            return $this->redirectToRoute('app_customer_customer');
        }

        return $this->render('AppBundle:Customer:customer_new.html.twig', array(
                    'form' => $form->createView()
        ));
    }

}
