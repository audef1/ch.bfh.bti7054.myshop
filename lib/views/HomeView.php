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

    }

    public function render(){
        echo "  <div  id='top' class='callbacks_container'>

                <!--- slider --->

                    <link rel='stylesheet' href='css/flickity.css' media='screen'>
                    <script src='js/flickity.js'></script>

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

                <div class='content'>
                    <div class='container'>
                        <div class='top-row'>
                            <div class='col-xs-4'>
                                <div class='top-row-col1 text-center'>
                                    <h2>WOMAN</h2>
                                    <img class='r-img text-center' src='images/img-w.jpg' title='name' />
                                    <span><img src='images/obj1.png' title='name' /></span>
                                    <h4>TOTAL</h4>
                                    <label>357 PRODUCTS</label>
                                    <a class='r-list-w' href='single-page.php'><img src='images/list-icon.png' title='list' /></a>
                                </div>
                            </div>
                            <div class='col-xs-4'>
                                <div class='top-row-col1 text-center'>
                                    <h2>MAN</h2>
                                    <img class='r-img text-center' src='images/man-r-img.jpg' title='name' />
                                    <span><img src='images/obj2.png' title='name' /></span>
                                    <h4>TOTAL</h4>
                                    <label>357 PRODUCTS</label>
                                    <a class='r-list-w' href='single-page.php'><img src='images/list-icon.png' title='list' /></a>
                                </div>
                            </div>
                            <div class='col-xs-4'>
                                <div class='top-row-col1 text-center'>
                                    <h2>KIDS</h2>
                                    <img class='r-img text-center' src='images/kid-r-img.jpg' title='name' />
                                    <span><img src='images/obj3.png' title='name' /></span>
                                    <h4>TOTAL</h4>
                                    <label>357 PRODUCTS</label>
                                    <a class='r-list-w' href='single-page.php'><img src='images/list-icon.png' title='list' /></a>
                                </div>
                            </div>
                            <div class='clearfix'> </div>
                    </div>
                    <div class='container'>
                        <div class='special-products'>
                            <div class='s-products-head'>
                                <div class='s-products-head-left'>
                                    <h3>SPECIAL <span>PRODUCTS</span></h3>
                                </div>
                                <div class='s-products-head-right'>
                                    <a href='products.php'><span> </span>view all products</a>
                                </div>
                                <div class='clearfix'> </div>
                            </div>
                            <div class='special-products-grids'>
                                <div class='col-md-3 special-products-grid text-center'>
                                    <a class='brand-name' href='single-page.php'><img src='images/b1.jpg' title='name' /></a>
                                    <a class='product-here' href='single-page.php'><img src='images/p1.jpg' title='product-name' /></a>
                                    <h4><a href='single-page.php'>Nike Roshe Run</a></h4>
                                    <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                                </div>
                                <div class='col-md-3 special-products-grid text-center'>
                                    <a class='brand-name' href='single-page.php'><img src='images/b2.jpg' title='name' /></a>
                                    <a class='product-here' href='single-page.php'><img src='images/p2.jpg' title='product-name' /></a>
                                    <h4><a href='single-page.php'>Line Link 67009</a></h4>
                                    <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                                </div>
                                <div class='col-md-3 special-products-grid text-center'>
                                    <a class='brand-name' href='single-page.php'><img src='images/b3.jpg' title='name' /></a>
                                    <a class='product-here' href='single-page.php'><img src='images/p3.jpg' title='product-name' /></a>
                                    <h4><a href='single-page.php'>Minimus Zero </a></h4>
                                    <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                                </div>
                                <div class='col-md-3 special-products-grid text-center'>
                                    <a class='brand-name' href='single-page.php'><img src='images/b4.jpg' title='name' /></a>
                                    <a class='product-here' href='single-page.php'><img src='images/p4.jpg' title='product-name' /></a>
                                    <h4><a href='single-page.php'> Athletic Shoe </a></h4>
                                    <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                                </div>
                                <div class='col-md-3 special-products-grid text-center'>
                                    <a class='brand-name' href='single-page.php'><img src='images/b5.jpg' title='name' /></a>
                                    <a class='product-here' href='single-page.php'><img src='images/p2.jpg' title='product-name' /></a>
                                    <h4><a href='single-page.php'>Veronique </a></h4>
                                    <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                                </div>
                                <div class='col-md-3 special-products-grid text-center'>
                                    <a class='brand-name' href='single-page.php'><img src='images/b6.jpg' title='name' /></a>
                                    <a class='product-here' href='single-page.php'><img src='images/p6.jpg' title='product-name' /></a>
                                    <h4><a href='single-page.php'>Suede Boots </a></h4>
                                    <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                                </div>
                                <div class='col-md-3 special-products-grid text-center'>
                                    <a class='brand-name' href='single-page.php'><img src='images/b7.jpg' title='name' /></a>
                                    <a class='product-here' href='single-page.php'><img src='images/p7.jpg' title='product-name' /></a>
                                    <h4><a href='single-page.php'>Barricade 6.0  </a></h4>
                                    <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                                </div>
                                <div class='col-md-3 special-products-grid text-center'>
                                    <a class='brand-name' href='single-page.php'><img src='images/b1.jpg' title='name' /></a>
                                    <a class='product-here' href='single-page.php'><img src='images/p8.jpg' title='product-name' /></a>
                                    <h4><a href='single-page.php'>Cotu Classic </a></h4>
                                    <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                                </div>
                                <div class='clearfix'> </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                ";
    }
}