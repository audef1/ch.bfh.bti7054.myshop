<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 11.12.15
 * Time: 14:53
 */
class Cart
{

    private $products = [];
    private $balance = "0";

    public function __construct(){

    }

    public function add(Product $newproduct){

        $productupdated = false;

        //check if product is already in cart if yes sum-up, if not add new product to cart
        if ($this->products) {
            foreach ($this->products as $product) {
                if ($product->__get('number') == $newproduct->__get('number') && $product->__get('selectedoption') == $newproduct->__get('selectedoption')) {
                    $this->update($product->__get('uid'), $product->__get('amount') + $newproduct->__get('amount'));
                    $productupdated = true;
                    break;
                }
            }
        }

        if (!$productupdated){
            $this->products[] = $newproduct;
        }

        $this->updateBalance();
    }

    public function remove($uid){
        foreach($this->products as $product){
            if ($product->__get('uid') == $uid){
                unset($this->products[array_search($product,$this->products,false)]);
            }
        }
        $this->updateBalance();
    }

    public function update($uniqid, $amount){
        foreach ($this->products as $product){
            if ($product->__get('uid') == $uniqid){
                $product->__set('amount', $amount);
            }
        }
        $this->updateBalance();
    }

    public function getCartBalance(){
        return $this->balance;
    }

    public function getProducts(){
        return $this->products;
    }

    private function updateBalance(){
        if (!empty($this->products)){
            $this->balance = 0;
            foreach ($this->products as $product){
                $this->balance += $product->__get('price2') * $product->__get('amount');
            }
        }
        else{
            $this->balance = 0;
        }
    }

    public function count(){
        return count($this->products);
    }

}