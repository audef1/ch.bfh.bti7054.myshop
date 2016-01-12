<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 10.01.16
 * Time: 16:27
 */
class ContactController
{
    private $view;

    public function __construct()
    {
        $this->view = new ContactView();
        
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