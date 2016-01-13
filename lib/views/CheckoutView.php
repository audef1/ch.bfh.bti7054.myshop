<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 10.01.16
 * Time: 13:08
 */
class CheckoutView
{
    private $step;
    private $checkout;

    public function __construct() {

        if (!isset($_SESSION['step'])){
            $this->step = "";
            $this->checkout = "";
        }
        elseif($_SESSION['step'] == 1){
            $this->step = "";
            $this->checkout = "";
        }
        elseif($_SESSION['step'] == 2){
            $this->step = "";
            $this->checkout = "";
        }

    }

    public function render() {
        echo "
            <div class='content'>
                <div class='container'>
                    <div class='p-content'>
                        <div class='p-content-header'>
                            <div class='p-content-header-left'>
                                 <h1>" . Trans::_('Checkout') . "</h1>
                            </div>
                            <div class='p-content-header-right'>

                            </div>
                            <div class='clearfix'> </div>
                        </div>


                    </div>
                </div>
            </div>
        ";
    }

}