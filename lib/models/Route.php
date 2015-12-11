<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 09.12.15
 * Time: 13:47
 */
class Route
{
    private $_uri = [];
    private $_view = [];

    public function add($uri, $view = null){
        $this->_uri[] = "/" . trim($uri, "/");

        if ($view != null){
            $this->_view[] = $view;
        }
    }

    public function renderView(){

        $uriGetParam = isset($_GET['uri']) ? "/" . $_GET['uri'] : '/';

        $uriView = explode("/",$uriGetParam);
        $uriView = "/" . $uriView[1];
        //echo "<pre>" . $uriView . "</pre>";

        $additinalParam = explode("/", $uriGetParam);
            echo "<pre>";
                print_r($additinalParam);
            echo "</pre>";

        foreach ($this->_uri as $key => $value) {

            //echo "<pre>" . $value . "</pre>";
            if (preg_match("#^$value$#", $uriView)){
            //if (preg_match("#^$value$#", $uriGetParam)){

                if ($this->_view[$key] === "PageView"){
                    //db query for nicename
                    $page_id = 5;
                    $view = new PageView(new Page($page_id));
                }
                else if ($this->_view[$key] === "SingleProductView"){
                    //db query for product nicename
                    $product_id = 10;
                    $view = new SingleProductView(new Product($product_id));
                }
                else {
                    $useView = $this->_view[$key];
                    $view = new $useView();
                }
                $view->render();
            }
        }
    }
}