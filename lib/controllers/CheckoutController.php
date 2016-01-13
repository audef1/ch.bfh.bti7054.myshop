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
            $this->view = new CheckoutView();
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