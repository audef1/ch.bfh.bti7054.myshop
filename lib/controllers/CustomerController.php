<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 10.01.16
 * Time: 16:27
 */
class CustomerController
{
    private $view;

    public function __construct()
    {
        if (isset($_SESSION['user'])) {
            $this->view = new CustomerView(unserialize($_SESSION['user']));
        }
        else{
            $this->view = new LoginView();
        }
    }

    public function renderView(){
        $this->view->render();
    }

}