<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 18.12.15
 * Time: 12:01
 */
class HeaderView
{

    private $login;
    private $cart;
    private $model;

    public function __construct($model = NULL) {

        if ($model){
            $this->model = $model;
        }

        if (!isset($_SESSION['user'])) {
            $this->login = "<li class='login'><a class='login' href='/myshop/login'>" . _('Login') . "</a></li>
                            <li><a class='rigister' href='/myshop/register'>" . _('Register') . "<span></span></a></li>
                            <div class='clearfix'> </div>";
        }
        else {
            $user = unserialize($_SESSION['user']);
            $this->login =  "";
            $this->login = "<li class='login'><a class='login' href='/myshop/myaccount'>" . $user->__get('firstname') . "</a></li>
                            <li><a class='rigister' href='/myshop/logout'>" . _('Logout') . "<span></span></a></li>
                            <div class='clearfix'> </div>";
        }

        //update cart count
        if (!isset($_SESSION['cart'])) {
            $this->cart = "<i class='fa fa-shopping-cart'></i><a href='" . _('cart') . "'>". _('Cart') ."</a>";
        }
        else {
            $cart = unserialize($_SESSION['cart']);
            $this->cart =  "";
            $this->cart = "<i class='fa fa-shopping-cart'></i><a href='/myshop/" . _('cart') . "'>". _('Cart') ."<span class='badge'>". $cart->count() ."</span></a>";
        }

    }

    public function render(){
        echo "
                <div class='container'>
                    <div class='top-header'>
                        <div class='logo'>
                            <a href='/myshop/'><img src='/myshop/images/logo.png' title='myshop' /></a>
                        </div>
                        <div class='top-header-info'>
                            <div class='top-contact-info'>
                                <ul class='unstyled-list list-inline'>
                                    <li><i class='fa fa-phone'></i> +4112 345 67 89</li>
                                    <li><i class='fa fa-envelope'></i> <a href='mailto:info@mywebshop.ch'>info@mywebshop.ch</a></li>
                                    <li>
                                        <span class='lang'></span>
                                        <ul class='langselect'>
                                            <!-- here come the languages from the languageview -->
                                        </ul>
                                    </li>
                                    <div class='clearfix'> </div>
                                </ul>
                            </div>
                            <div class='cart-details'>
                                <div class='add-to-cart'>
                                    <ul class='unstyled-list list-inline'>
                                    " . $this->cart . "
                                    </ul>
                                </div>
                                <div class='login-rigister'>
                                    <ul class='unstyled-list list-inline loginregister'>
                                        " . $this->login . "
                                    </ul>
                                </div>
                                <div class='clearfix'> </div>
                            </div>
                        </div>
                        <div class='clearfix'> </div>
                    </div>
                    <div class='top-header-nav'>
                        <nav class='top-nav main-menu'>
                            " . get_top_menu() . "
                            <a href='#' id='pull'><img src='/myshop/images/nav-icon.png' title='menu' /></a>
                        </nav>
                        <!-- <div class='top-header-search-box'>
                            <form>
                                <input type='text' placeholder='" . _('Search') . "' required  maxlength='22'>
                                <input type='submit' value=' ' >
                            </form>
                        </div> -->
                        <div class='clearfix'></div>
                    </div>
                </div>
            ";
    }

}