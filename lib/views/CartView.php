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
                                <input type='number' name='quantity' min='0' value='" . $product->__get('amount') . "'>
                                <i class='fa fa-plus-square'></i>
                                <i class='fa fa-minus-square'></i>
                            </td>
                            <td>" . number_format($product->__get('price2'), 2) . "</td>
                            <td>" . number_format($product->__get('price2') * $product->__get('amount'), 2) . "</td>
                            <td><i class='fa fa-trash'></i></td>
                           </tr>";
        }

        if ($products == ""){
            echo _('Your Cart is empty.');
        }
        else{
            echo "<form method='post' action='". _('cart') ."'>
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
                    <div class='total'><strong>Total: ". number_format($this->model->getCartBalance(), 2) ." CHF</strong></div><input type='submit' value='". _('checkout') ."'/>

                  </form>";
        }

        echo "    </div>
                </div>
            </div>";
    }
}