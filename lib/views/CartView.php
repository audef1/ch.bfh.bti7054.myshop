<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 23.12.15
 * Time: 17:38
 */
class CartView
{
    private $model;

    public function __construct(Cart $model)
    {
        $this->model = $model;
    }

    public function render(){
        echo "Hier kommt der Warenkob hin!";
    }


}