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

        echo "<div class='content'>
                <div class='container'>
                    <div class='p-content'>
                        <div class='p-content-header'>
                            <div class='p-content-header-left'>
                                 <h1>" . _('Your Cart') . "</h1>
                            </div>
                            <div class='p-content-header-right'>

                            </div>
                            <div class='clearfix'> </div>
                        </div>";

        $products = "";

        foreach ($this->model->getProducts() as $product){
            $products .= "<tr>
                            <td>
                                <b>" . $product->__get('name1') . "</b>
                            </td>
                            <td>
                                <input type='number' id='". $product->__get('number') ."' min='0' value='" . $product->__get('amount') . "' disabled>
                                <a href='/myshop/". _('cart') ."/update/". $product->__get('number')."/" . ($product->__get('amount') + 1) . "'><i class='fa fa-plus-square'></i></a>
                                <a href='/myshop/". _('cart') ."/update/". $product->__get('number')."/" . ($product->__get('amount') - 1) . "'><i class='fa fa-minus-square'></i></a>
                            </td>
                            <td>" . number_format($product->__get('price2'), 2) . "</td>
                            <td>" . number_format($product->__get('price2') * $product->__get('amount'), 2) . "</td>
                            <td>
                                <a href='/myshop/". _('cart') ."/delete/". $product->__get('number') . "'><i class='fa fa-trash'></i></a>
                            </td>
                           </tr>";
        }

        if ($products == ""){
            echo _('Your Cart is empty.');
        }
        else{
            echo "<form id='cartform' action='". _('cart') ."' method='post'>
                    <div class='table-responsive'>
                      <table class='table'>
                        <thead>
                          <tr>
                            <th>Details</th>
                            <th>Menge</th>
                            <th>Stückpreis</th>
                            <th>Totalpreis</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>

                        ". $products ."

                        </tbody>
                      </table>
                    </div>
                    <div class='total'><strong>Total: ". number_format($this->model->getCartBalance(), 2) ." CHF</strong></div>
                    <input type='text' id='action' value='' style='display: none;'/>
                    <input type='submit' id='submitcheckout' value='". _('checkout') ."'/>

                  </form>";
        }

        echo "    </div>
                </div>
            </div>";
    }
}