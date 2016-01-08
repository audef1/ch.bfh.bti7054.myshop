<?php

namespace AppBundle\Controller;

use AppBundle\Form\ProductType;
use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller {

    /**
     * @Route("/Product")
     */
    public function ProductAction() {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $products = $repository->findAll();

        return $this->render('AppBundle:Product:product.html.twig', array(
                    'products' => $products
        ));
    }

    /**
     * @Route("/ProductNew")
     */
    public function ProductNewAction(Request $request) {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $product = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('app_product_product');
        }

        return $this->render('AppBundle:Product:product_new.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/ProductEdit/{id}")
     */
    public function ProductEditAction(Request $request, $id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');

        $product = $repository->find($id);
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $product = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('app_product_product');
        }

        return $this->render('AppBundle:Product:product_edit.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/ProductDelete/{id}")
     */
    public function ProductDeleteAction(Request $request, $id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');

        $product = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();

        return $this->redirectToRoute('app_product_product');
    }

}
