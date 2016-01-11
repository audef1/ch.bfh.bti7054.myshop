<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ProductStock;
use AppBundle\Form\ProductStockType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductStockController extends Controller {

    /**
     * @Route("/ProdutStock")
     */
    public function ProdutStockAction() {
        $em = $this->getDoctrine()->getManager();
        $products = $em
                ->getRepository('AppBundle:Product')
                ->createQueryBuilder('p')
                ->select('p.productNumber')
                ->distinct()
                ->getQuery()
                ->getResult();
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductStock');
        foreach ($products as $productNumber) {
            $stock = $repository->findByproductNumber($productNumber['productNumber']);
            
            if(count($stock) === 0) {
                $newStock = new ProductStock();
                $newStock->setProductNumber($productNumber['productNumber']);
                $newStock->setStock(0);
                $em->persist($newStock);
                $em->flush();
            }        
        }

        $stocks = $repository->findAll();

        return $this->render('AppBundle:ProductStock:produt_stock.html.twig', array(
                    'stocks' => $stocks
        ));
    }

    /**
     * @Route("/ProductStockEdit/{id}")
     */
    public function ProductStockEditAction(Request $request, $id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductStock');

        $stock = $repository->find($id);
        $form = $this->createForm(ProductStockType::class, $stock);

        $form->handleRequest($request);

        if ($form->isValid() && $form->isSubmitted()) {
            $stock = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($stock);
            $em->flush();

            return $this->redirectToRoute('app_productstock_produtstock');
        }

        return $this->render('AppBundle:ProductStock:product_stock_edit.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
     * @Route("/ProductStockDelete/{id}")
     */
    public function ProductStockDeleteAction(Request $request, $id) {
        $repository = $this->getDoctrine()->getRepository('AppBundle:ProductStock');

        $stock = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($stock);
        $em->flush();

        return $this->redirectToRoute('app_productstock_produtstock');
    }

}
