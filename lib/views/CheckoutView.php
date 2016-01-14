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
    private $user;
    private $cart;
    private $productoverview;

    public function __construct() {
        $this->user = unserialize($_SESSION['user']);
        $this->cart = unserialize($_SESSION['cart']);

        foreach ($this->cart->getProducts() as $product){
            $images = json_decode($product->__get('images'), true);
            $this->productoverview .= "<tr>
                <td>
                     <img src='/myshop/images/products/". $images['thumb'] ."' class='cartthumb' height='60px'/><b>" . $product->__get('name1') . "</b><br />" . Trans::_('size') . ": " . $product->__get('selectedoption') ."
                 </td>
                 <td>
                     " . $product->__get('amount') . "
                 </td>
                 <td>" . number_format($product->__get('price2'), 2) . "</td>
                 <td style='text-align: right;'>" . number_format($product->__get('price2') * $product->__get('amount'), 2) . "</td>
            </tr>";
        }
    }

    public function render() {

        echo "<script type='text/javascript' src='/myshop/js/easyWizard.js'></script>
              <link href='/myshop/css/easyWizard.css' rel='stylesheet' type='text/css' />";

        echo "
            <div class='content'>
                <div class='container'>
                    <div class='p-content'>
                        <div class='p-content-header'>
                            <div class='p-content-header-left'>
                                 <h1>" . Trans::_('Checkout') . "</h1>
                            </div>
                            <div class='p-content-header-right'></div>
                            
                            <form id='myWizard' type='get' action='checkout' class='form-horizontal'>
                                <section class='step' data-step-title='" . Trans::_('contactinformation') . "'>
                                   <div class='container'>
                                       <legend>" . Trans::_('contactinformation') . "</legend>
                                       <div class='row'>
                                            <div class='col-md-6'>
                                                <h2>" . Trans::_('shippingaddress') . "</h2>"
                                                . ($this->user->title) . "<br/>"
                                                . ($this->user->firstname) . " " . ($this->user->lastname) . "<br/>"
                                                . ($this->user->address) . "<br/>"
                                                . ($this->user->zip) . " " . ($this->user->location) . "<br/>"
                                                . "<h3>" . Trans::_('Contact Information') . "</h3>"
                                                . "<i class='fa fa-phone'></i>" . $this->user->phone ."<br/>"
                                                . "<i class='fa fa-envelope'></i><a href='mailto:". $this->user->email ."'>" . $this->user->email . "</a>"
                                                ."
                                            </div>
                                            <div class='col-md-6'>
                                            <h2>" . Trans::_('billingaddress') ."</h2>"
                                                . ($this->user->title2) . "<br/>"
                                                . ($this->user->firstname2) . " " . ($this->user->lastname2) . "<br/>"
                                                . ($this->user->address2) . "<br/>"
                                                . ($this->user->zip2) . " " . ($this->user->location2) . "<br/>"
                                                ."
                                            </div>
                                        </div>
                                   </div>
                                </section>
                                <section class='step' data-step-title='" . Trans::_('paymentinformation') . "'>
                                    <div class='container'>
                                        <fieldset>
                                          <legend>" . Trans::_('paymentinformation') . "</legend>
                                          <div class='form-group'>
                                            <label class='col-sm-3 control-label' for='card-holder-name'>Name on Card</label>
                                            <div class='col-sm-5'>
                                              <input type='text' class='form-control' name='card-holder-name' id='card-holder-name' placeholder='Card Holders Name' disabled>
                                            </div>
                                          </div>
                                          <div class='form-group'>
                                            <label class='col-sm-3 control-label' for='card-number'>Card Number</label>
                                            <div class='col-sm-5'>
                                              <input type='text' class='form-control' name='card-number' id='card-number' placeholder='Debit/Credit Card Number' disabled>
                                            </div>
                                          </div>
                                          <div class='form-group'>
                                            <label class='col-sm-3 control-label' for='expiry-month'>Expiration Date</label>
                                            <div class='col-sm-9'>
                                              <div class='row'>
                                                <div class='col-xs-3'>
                                                  <select class='form-control col-sm-2' name='expiry-month' id='expiry-month' disabled >
                                                    <option>Month</option>
                                                    <option value='01'>Jan (01)</option>
                                                    <option value='02'>Feb (02)</option>
                                                    <option value='03'>Mar (03)</option>
                                                    <option value='04'>Apr (04)</option>
                                                    <option value='05'>May (05)</option>
                                                    <option value='06'>June (06)</option>
                                                    <option value='07'>July (07)</option>
                                                    <option value='08'>Aug (08)</option>
                                                    <option value='09'>Sep (09)</option>
                                                    <option value='10'>Oct (10)</option>
                                                    <option value='11'>Nov (11)</option>
                                                    <option value='12'>Dec (12)</option>
                                                  </select>
                                                </div>
                                                <div class='col-xs-3'>
                                                  <select class='form-control' name='expiry-year' disabled>
                                                    <option value='16'>2016</option>
                                                    <option value='17'>2017</option>
                                                    <option value='18'>2018</option>
                                                    <option value='19'>2019</option>
                                                    <option value='20'>2020</option>
                                                    <option value='21'>2021</option>
                                                    <option value='22'>2022</option>
                                                    <option value='23'>2023</option>
                                                  </select>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class='form-group'>
                                            <label class='col-sm-3 control-label' for='cvv'>Card CVV</label>
                                            <div class='col-sm-3'>
                                              <input type='text' class='form-control' name='cvv' id='cvv' placeholder='Security Code' disabled>
                                            </div>
                                          </div>
                                          <div class='form-group'>
                                            <div class='col-sm-offset-3 col-sm-9'>
                                              <button type='button' class='btn btn-success' disabled>Pay Now</button>
                                            </div>
                                          </div>
                                        </fieldset>
                                    </div>
                                </section>
                                <section class='step' data-step-title='" . Trans::_('overviewcheckout') . "'>
                                    <legend>" . Trans::_('overviewcheckout') . "</legend>
                                    <div class='table-responsive'>
                                      <table class='table'>
                                        <thead>
                                          <tr>
                                            <th>" . Trans::_('details') . "</th>
                                            <th>" . Trans::_('amount') . "</th>
                                            <th>" . Trans::_('single price') . "</th>
                                            <th style='text-align: right;'>" . Trans::_('total price') . "</th>
                                          </tr>
                                        </thead>
                                        <tbody>

                                        ". $this->productoverview ."
                                            <tr>
                                                <td colspan='4' style='text-align: right;'><strong>" . Trans::_('total price') . ":</strong> CHF ". number_format($this->cart->getCartBalance(), 2) ."</td>
                                            </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                </section>
                                <input type='hidden' value='1' name='ordersubmitted' style='display: none;' />
                            </form>

                            <script>$('#myWizard').easyWizard();</script>

                            <div class='clearfix'> </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }

}