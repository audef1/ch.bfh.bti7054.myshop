<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 23.12.15
 * Time: 17:40
 */
class CartController
{

    private $view;

    public function __construct($parameter){

        $cart = unserialize($_SESSION['cart']);

        // set variables
        if (isset($parameter[2])){
            $action = $parameter[2];
        }
        if (isset($parameter[3])){
            $productnr = $parameter[3];
            $uid = $parameter[3];
        }
        if (isset($parameter[4])){
            $amount = $parameter[4];
        }
        if (isset($parameter[5])){
            $option = $parameter[5];
        }

        //update
        if (!empty($action) && $action == "update" && !empty($uid) && !empty($amount)){
            $cart->update($uid, $amount);
        }

        //delete
        if (!empty($action) && $action == "delete" && !empty($uid)){
            $cart->remove($uid);
        }

        //add
        if (!empty($action) && $action == "add"){

            //connect to db and get productid
            $db = DatabaseController::getInstance();
            $mysqli = $db->getConnection();
            $sql_query = "SELECT `product_id` FROM `product` WHERE `product_number` = '" . $productnr . "';";
            if ($result = $mysqli->query($sql_query)){
                $product_id = $result->fetch_array();
                $product_id = $product_id['product_id'];
            }
            else{
                $product_id = 1;
            }

            //create new product for cart and update its values according selection
            $newproduct = new Product($product_id);
            $newproduct->__set('selectedoption', $option);
            $newproduct->updateUid();
            $newproduct->__set('amount', $amount);
            $cart->add($newproduct);
        }

        $_SESSION['cart'] = serialize($cart);
        $this->view = new CartView($cart);
    }

    public function renderView(){
        $this->view->render();
    }


}