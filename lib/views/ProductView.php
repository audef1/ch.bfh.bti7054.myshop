<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 04.12.15
 * Time: 10:53
 */

class ProductView
{

    private $model;

    public function __construct(Products $model)
    {
        $this->model = $model;
    }

    public function render()
    {
        $products = "";

        foreach ($this->model->getProducts() as $product){
            $image = json_decode($product->__get('images'), true);
            $productlink = "/myshop/". Trans::getDomain() ."/". Trans::_('product') . "/". $product->__get('nicename');

            $products .= "<div class='col-md-3 special-products-grid text-center'>
                                <a class='brand-name' href='" . $productlink . "'><img src='/myshop/images/brands/" . $product->__get('brand_nicename') . ".jpg' title='" . $product->__get('brand') . "'></a>
                                <a class='product-here' href='" . $productlink . "'><img src='/myshop/images/products/" . $image['thumb'] . "' title='" . $product->__get('name1') . "'></a>
                                <h4><a href='" . $productlink . "'>". $product->__get('name1') ."</a></h4>
                                <a class='product-btn' href='" . $productlink . "'><span>" . $product->__get('price2') . "</span><small>". Trans::_('Get now!') ."</small><label></label></a>
                            </div>";
        }

        echo "
            <div class='content'>
                <div class='container'>
                    <!----speical-products---->
                    <div class='special-products'>
                        <div class='s-products-head'>
                            <div class='s-products-head-left'>
                                <h3>SPECIAL <span>PRODUCTS</span></h3>
                            </div>
                            <div class='s-products-head-right'>
                                <a href='" . Trans::_('products') . "'><span> </span>view all products</a>
                            </div>
                            <div class='clearfix'> </div>
                        </div>
                        <!----special-products-grids---->
                        <div class='special-products-grids'>
                        " . $products . "
                        <div class='clearfix'> </div>
                        </div>
                        <!---//special-products-grids---->
                    </div>
                    <!---//speical-products---->
                </div>
                <!----//content---->
        ";
    }
}