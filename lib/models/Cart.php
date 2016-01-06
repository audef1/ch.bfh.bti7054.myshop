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

    public function add(Product $product){
        $this->products[] = $product;
        $this->updateBalance();
    }

    public function remove($productnumber){
        foreach($this->products as $product){
            if ($product->__get('number') == $productnumber){
                unset($this->products[array_search($product,$this->products,false)]);
            }
        }
        $this->updateBalance();
    }

    public function update($productnumber, $amount){
        foreach ($this->products as $product){
            if ($product->__get('number') == $productnumber){
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