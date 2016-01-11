<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 10.01.16
 * Time: 16:27
 */
class RegistrationController
{
    private $view;
    private $parameter;

    public function __construct($parameter)
    {
        $this->parameter = $parameter;
        $this->view = new RegisterView();
    }

    public function renderView(){
        $header = new HeaderView($this->parameter);
        $header->render();

        $this->view->render();

        $footer = new FooterView();
        $footer->render();
    }

}