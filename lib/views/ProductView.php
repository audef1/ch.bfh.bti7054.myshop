<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 04.12.15
 * Time: 10:53
 */

class ProductView
{

    private $products = [];

    public function __construct()
    {
        //connect to db and get page with $id
        $db = DatabaseController::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT * FROM products WHERE lang = '" . $_COOKIE['locale'] . "' AND hidden != 1;";
        $result = $mysqli->query($sql_query);

        //while ($row = $result->fetch_row()) {
        //    $products[] = $row->fetch_array();
        //}

    }

    public function render()
    {
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
                                <a href='products.php'><span> </span>view all products</a>
                            </div>
                            <div class='clearfix'> </div>
                        </div>
                        <!----special-products-grids---->
                        <div class='special-products-grids'>
                            <div class='col-md-3 special-products-grid text-center'>
                                <a class='brand-name' href='single-page.php'><img src='/myshop/images/b1.jpg' title='name' /></a>
                                <a class='product-here' href='single-page.php'><img src='/myshop/images/p1.jpg' title='product-name' /></a>
                                <h4><a href='single-page.php'>Nike Roshe Run</a></h4>
                                <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                            </div>
                            <div class='col-md-3 special-products-grid text-center'>
                                <a class='brand-name' href='single-page.php'><img src='/myshop/images/b2.jpg' title='name' /></a>
                                <a class='product-here' href='single-page.php'><img src='/myshop/images/p2.jpg' title='product-name' /></a>
                                <h4><a href='single-page.php'>Line Link 67009</a></h4>
                                <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                            </div>
                            <div class='col-md-3 special-products-grid text-center'>
                                <a class='brand-name' href='single-page.php'><img src='/myshop/images/b3.jpg' title='name' /></a>
                                <a class='product-here' href='single-page.php'><img src='/myshop/images/p3.jpg' title='product-name' /></a>
                                <h4><a href='single-page.php'>Minimus Zero </a></h4>
                                <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                            </div>
                            <div class='col-md-3 special-products-grid text-center'>
                                <a class='brand-name' href='single-page.php'><img src='/myshop/images/b4.jpg' title='name' /></a>
                                <a class='product-here' href='single-page.php'><img src='/myshop/images/p4.jpg' title='product-name' /></a>
                                <h4><a href='single-page.php'> Athletic Shoe </a></h4>
                                <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                            </div>
                            <div class='col-md-3 special-products-grid text-center'>
                                <a class='brand-name' href='single-page.php'><img src='/myshop/images/b5.jpg' title='name' /></a>
                                <a class='product-here' href='single-page.php'><img src='/myshop/images/p2.jpg' title='product-name' /></a>
                                <h4><a href='single-page.php'>Veronique </a></h4>
                                <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                            </div>
                            <div class='col-md-3 special-products-grid text-center'>
                                <a class='brand-name' href='single-page.php'><img src='/myshop/images/b6.jpg' title='name' /></a>
                                <a class='product-here' href='single-page.php'><img src='/myshop/images/p6.jpg' title='product-name' /></a>
                                <h4><a href='single-page.php'>Suede Boots </a></h4>
                                <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                            </div>
                            <div class='col-md-3 special-products-grid text-center'>
                                <a class='brand-name' href='single-page.php'><img src='/myshop/images/b7.jpg' title='name' /></a>
                                <a class='product-here' href='single-page.php'><img src='/myshop/images/p7.jpg' title='product-name' /></a>
                                <h4><a href='single-page.php'>Barricade 6.0  </a></h4>
                                <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                            </div>
                            <div class='col-md-3 special-products-grid text-center'>
                                <a class='brand-name' href='single-page.php'><img src='/myshop/images/b1.jpg' title='name' /></a>
                                <a class='product-here' href='single-page.php'><img src='/myshop/images/p8.jpg' title='product-name' /></a>
                                <h4><a href='single-page.php'>Cotu Classic </a></h4>
                                <a class='product-btn' href='single-page.php'><span>109.90$</span><small>GET NOW</small><label> </label></a>
                            </div>
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