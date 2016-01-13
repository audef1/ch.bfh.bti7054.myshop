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
    private $model;

    public function __construct() {
        $this->model = unserialize($_SESSION['user']);
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
                            
                            <form id='myWizard' type='post' action='checkout' class='form-horizontal'>
                                <section class='step' data-step-title='Information'>
                                   <div class='container'>
                                       <div class='row'>
                                            <div class='col-md-6'>
                                                <h2>" . Trans::_('shippingaddress') . "</h2>"
                                                . ($this->model->title) . "<br/>"
                                                . ($this->model->firstname) . " " . ($this->model->lastname) . "<br/>"
                                                . ($this->model->address) . "<br/>"
                                                . ($this->model->zip) . " " . ($this->model->location) . "<br/>"
                                                . "<h3>" . Trans::_('Contact Information') . "</h3>"
                                                . "<i class='fa fa-phone'></i>" . $this->model->phone ."<br/>"
                                                . "<i class='fa fa-envelope'></i><a href='mailto:". $this->model->email ."'>" . $this->model->email . "</a>"
                                                ."
                                            </div>
                                            <div class='col-md-6'>
                                            <h2>" . Trans::_('billingaddress') ."</h2>"
                                                . ($this->model->title2) . "<br/>"
                                                . ($this->model->firstname2) . " " . ($this->model->lastname2) . "<br/>"
                                                . ($this->model->address2) . "<br/>"
                                                . ($this->model->zip2) . " " . ($this->model->location2) . "<br/>"
                                                ."
                                            </div>
                                        </div>
                                   </div>
                                </section>
                                <section class='step' data-step-title='Payment'>
                                    <div class='container'>
                                        <fieldset>
                                          <legend>Payment</legend>
                                          <div class='form-group'>
                                            <label class='col-sm-3 control-label' for='card-holder-name'>Name on Card</label>
                                            <div class='col-sm-5'>
                                              <input type='text' class='form-control' name='card-holder-name' id='card-holder-name' placeholder='Card Holder's Name'>
                                            </div>
                                          </div>
                                          <div class='form-group'>
                                            <label class='col-sm-3 control-label' for='card-number'>Card Number</label>
                                            <div class='col-sm-5'>
                                              <input type='text' class='form-control' name='card-number' id='card-number' placeholder='Debit/Credit Card Number'>
                                            </div>
                                          </div>
                                          <div class='form-group'>
                                            <label class='col-sm-3 control-label' for='expiry-month'>Expiration Date</label>
                                            <div class='col-sm-9'>
                                              <div class='row'>
                                                <div class='col-xs-3'>
                                                  <select class='form-control col-sm-2' name='expiry-month' id='expiry-month'>
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
                                                  <select class='form-control' name='expiry-year'>
                                                    <option value='13'>2013</option>
                                                    <option value='14'>2014</option>
                                                    <option value='15'>2015</option>
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
                                              <input type='text' class='form-control' name='cvv' id='cvv' placeholder='Security Code'>
                                            </div>
                                          </div>
                                          <div class='form-group'>
                                            <div class='col-sm-offset-3 col-sm-9'>
                                              <button type='button' class='btn btn-success'>Pay Now</button>
                                            </div>
                                          </div>
                                        </fieldset>
                                    </div>
                                </section>
                                <section class='step' data-step-title='Overview & Checkout'>
                                    <div class='control-group'>
                                        <label class='control-label' for='inputFirstname'>Firstname</label>
                                            <div class='controls'>
                                            <input type='text' id='inputFirstname' placeholder='Firstname' class='input-xlarge'>
                                        </div>
                                    </div>
                                    <div class='control-group'>
                                        <label class='control-label' for='inputCity'>City</label>
                                            <div class='controls'>
                                            <input type='text' id='inputCity' placeholder='City' class='input-xlarge'>
                                        </div>
                                    </div>
                                </section>
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