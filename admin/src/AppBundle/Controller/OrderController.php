<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ProductOrder;
use AppBundle\Form\OrderType;
use AppBundle\Form\ProductOrderType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OrderController extends Controller
{
    /**
     * @Route("/Order")
     */
    public function OrderAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductOrder');
        $orders = $repository->findAll();
        
        return $this->render('AppBundle:Order:order.html.twig', array(
            'orders' => $orders
        ));
    }

    /**
     * @Route("/OrderNew")
     */
    public function OrderNewAction(Request $request)
    {
        $order = new ProductOrder();
        $form = $this->createForm(ProductOrderType::class, $order);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $order = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush();

            return $this->redirectToRoute('app_order_order');
        }
        
        return $this->render('AppBundle:Order:order_new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/OrderEdit/{id}")
     */
    public function OrderEditAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductOrder');

        $order = $repository->find($id);
        $form = $this->createForm(ProductOrderType::class, $order);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $order = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($order);
            $em->flush();

            return $this->redirectToRoute('app_order_order');
        }
        
        return $this->render('AppBundle:Order:order_edit.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/OrderDelete/{id}")
     */
    public function OrderDeleteAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductOrder');

        $order = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($order);
        $em->flush();

        return $this->redirectToRoute('app_order_order');
    }

}
