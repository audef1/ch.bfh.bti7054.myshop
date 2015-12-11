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
        //if product exists in product->qty++ (possibly check product->name)
    }

    public function remove(Product $product){
        //this->products->product->qty--
        //if product->qty==0 -> delete(product)
    }

    public function delete(Product $product){
        //remove product from products
    }

    public function getCartBalance(){
        // cart-balance = 0
        //foreach (products as product)
        // cart-balance += product->price * product->qty
        // return cart-balance
    }

}