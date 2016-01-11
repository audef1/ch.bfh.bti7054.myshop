<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 10.01.16
 * Time: 16:15
 */
class SingleProductController
{

    private $view;
    private $model;

    public function __construct($parameter)
    {
        if (!isset($parameter[2])){
            $product_id = 1;
        }
        else{
            //connect to db and get productid
            $db = DatabaseController::getInstance();
            $mysqli = $db->getConnection();
            $sql_query = "SELECT `product_id` FROM `product` WHERE `product_nicename` = '" . $parameter[2] . "' AND `hidden` != 1;";
            
            if ($result = $mysqli->query($sql_query)){
                $product_id = $result->fetch_array();
                $product_id = $product_id['product_id'];
            }
            else{
                $product_id = 1;
            }
        }

        $product = new Product($product_id);
        $this->view = new SingleProductView($product);

        $this->model = $product;

        $langselect = new LanguageView($product);
        $langselect->render();
    }

    public function renderView(){
        $header = new HeaderView($this->model);
        $header->render();

        $this->view->render();

        $footer = new FooterView();
        $footer->render();
    }

}