<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 04.12.15
 * Time: 11:00
 */

class HomeView
{

    public function __construct() {
        $langselect = new LanguageView(null);
        $langselect->render();

    }

    public function render(){

        $header = new HeaderView();
        $header->render();

        echo "  <div  id='top' class='callbacks_container'>

                <!--- slider --->

                    <link rel='stylesheet' href='/myshop/css/flickity.css' media='screen'>
                    <script src='/myshop/js/flickity.js'></script>

                    <div class='slider'>
                        <div class='slider-cell'>
                            <img src='images/slide1.png' alt=''>
                            <div class='caption'>
                                <div class='slide-text-info'>
                                    <h1>WILL HELM</h1>
                                    <label>SCHNAPS</label>
                                    <a class='slide-btn' href='#'><span>99.90$</span> <small>GET NOW</small><label> </label></a>
                                </div>
                            </div>
                        </div>
                        <div class='slider-cell'>
                            <img src='images/slide2.png' alt=''>
                            <div class='caption'>
                                <div class='slide-text-info'>
                                    <h1>FAST NER2</h1>
                                    <label>Dress Shoe</label>
                                    <a class='slide-btn' href='#'><span>99.90$</span> <small>GET NOW</small><label> </label></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $('.slider').flickity({
                          // options
                          cellAlign: 'left',
                          contain: true,
                          wrapAround: true,
                          autoPlay: 10000
                        });
                    </script>

                <!--- end slider --->

                ";

        //render Products
        $products = new Products();
        $productsview = new ProductView($products);
        $productsview->render();

        echo "</div>";

        $footer = new FooterView();
        $footer->render();
    }
}