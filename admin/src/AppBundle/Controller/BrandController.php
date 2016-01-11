<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ProductBrand;
use AppBundle\Form\ProductBrandType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BrandController extends Controller
{
    /**
     * @Route("/Brand")
     */
    public function BrandAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductBrand');
        $brands = $repository->findAll();
        
        return $this->render('AppBundle:Brand:brand.html.twig', array(
           'brands' => $brands
        ));
    }

    /**
     * @Route("/BrandNew")
     */
    public function BrandNewAction(Request $request)
    {
        $brand = new ProductBrand();
        $form = $this->createForm(ProductBrandType::class, $brand);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $brand = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($brand);
            $em->flush();

            return $this->redirectToRoute('app_brand_brand');
        }
        
        return $this->render('AppBundle:Brand:brand_new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/BrandEdit/{id}")
     */
    public function BrandEditAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductBrand');

        $brand = $repository->find($id);
        $form = $this->createForm(ProductBrandType::class, $brand);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $brand = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($brand);
            $em->flush();

            return $this->redirectToRoute('app_brand_brand');
        }
        
        return $this->render('AppBundle:Brand:brand_edit.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/BrandDelete/{id}")
     */
    public function BrandDeleteAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductBrand');

        $brand = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($brand);
        $em->flush();

        return $this->redirectToRoute('app_brand_brand');
    }

}
