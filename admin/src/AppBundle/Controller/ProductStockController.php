<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductStockController extends Controller
{
    /**
     * @Route("/ProdutStock")
     */
    public function ProdutStockAction()
    {
        return $this->render('AppBundle:ProductStock:produt_stock.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/ProductStockNew")
     */
    public function ProductStockNewAction()
    {
        return $this->render('AppBundle:ProductStock:product_stock_new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/ProductStockEdit")
     */
    public function ProductStockEditAction()
    {
        return $this->render('AppBundle:ProductStock:product_stock_edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/ProductStockDelete")
     */
    public function ProductStockDeleteAction()
    {
        return $this->render('AppBundle:ProductStock:product_stock_delete.html.twig', array(
            // ...
        ));
    }

}
