<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 26.12.15
 * Time: 16:27
 */
class CustomerView
{

    private $model;

    public function __construct(Customer $model)
    {
        $this->model = $model;
    }

    public function render(){
        echo "User <b>" . $this->model->__get('username'). "</b> ist eingeloggt. Hier kommen die Kundeninformationen hin.";
    }


}