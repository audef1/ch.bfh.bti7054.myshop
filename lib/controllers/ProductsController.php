<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 10.01.16
 * Time: 16:11
 */
class ProductsController
{

    private $view;

    public function __construct()
    {
        $products = new Products();
        $this->view = new ProductView($products);
    }

    public function renderView(){
        $this->view->render();
    }

}