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
    private $model;

    public function __construct()
    {
        $products = new Products();
        $this->model = $products;
        $this->view = new ProductView($products);
    }

    public function renderView(){
        $header = new HeaderView($this->model);
        $header->render();

        $this->view->render();

        $footer = new FooterView();
        $footer->render();
    }

}