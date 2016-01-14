<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 13.01.16
 * Time: 15:00
 */
class CheckoutController
{
    private $view;

    public function __construct($parameter)
    {
        if (isset($_SESSION['user'])){

            if (isset($_GET['ordersubmitted'])){

                //write order to db
                $customer = unserialize($_SESSION['user']);
                $cart = unserialize($_SESSION['cart']);

                $id = $customer->__get('id');

                //create json array for order-entry
                $products = [];
                foreach ($cart->getProducts() as $product){
                    $products[] = array($product->__get('number'), $product->__get('amount'), $product->__get('selectedoption') );
                }
                $products = json_encode($products);

                $db = DatabaseController::getInstance();
                $mysqli = $db->getConnection();
                $sql_query = "INSERT INTO `product_order` (`customer_id`, `order_products`) VALUES ('$id', '$products');";
                $mysqli->query($sql_query);
                $mysqli->commit();



                //send email to admin and customer
                //mail("f_auderset@hotmail.com", "Bestellung", "Jemand hat eine Bestellung getätigt" );
                mail($customer->__get('email'), "Your Order", "Hello " . $customer->__get('firstname') . " " . $customer->__get('lastname') . "\n\n Thanks for your Order!\n You have ordered " . $cart->count() . " Product(s) with a total price of CHF " . $cart->getCartBalance() . ".\nYou'll never get it HAHAHA. \n\n Best wishes\nYour myshop Team" );

                //unset cart
                unset($_SESSION['cart']);

                $this->view = new OrderCompleteView();
            }
            else{
                $this->view = new CheckoutView();
            }

        }
        else{
            $_SESSION['checkout'] = 1;
            $this->view = new LoginView();
        }

        $langselect = new LanguageView(null);
        $langselect->render();
    }

    public function renderView(){

        $header = new HeaderView();
        $header->render();

        $this->view->render();

        $footer = new FooterView();
        $footer->render();
    }
}