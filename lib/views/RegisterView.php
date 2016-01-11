<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 08.01.16
 * Time: 21:28
 */
class RegisterView
{
    public function __construct()
    {

    }

    public function render()
    {
        echo "
            <div class='content'>
                <div class='container'>
                    <div class='p-content'>
                        <div class='p-content-header'>
                            <div class='p-content-header-left'>
                                 <h1>" . _('Register') . "</h1>
                            </div>
                            <div class='p-content-header-right'>

                            </div>
                            <div class='clearfix'> </div>
                        </div>

                        <form class='form-horizontal'>
                            <fieldset>
                                <legend>" . _('logininformation') . "</legend>
                                 <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='login'>" . _('loginname') . "</label>
                                  <div class='col-md-5'>
                                  <input id='login' name='login' type='text' class='form-control input-md' required=''>
                                  </div>
                                </div>

                                <!-- Password input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='password'>" . _('password') . "</label>
                                  <div class='col-md-5'>
                                    <input id='password' name='password' type='password' class='form-control input-md' required=''>
                                  </div>
                                </div>

                                <!-- Password input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='password2'>" . _('repeat password') . "</label>
                                  <div class='col-md-5'>
                                    <input id='password2' name='password2' type='password' class='form-control input-md' required=''>
                                  </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>" . _('shippingaddress') . "</legend>
                                <!-- Select Basic -->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='title'>" . _('title') . "</label>
                                  <div class='col-md-4'>
                                    <select id='title' name='title' class='form-control'>
                                      <option value='" . _('mr') . "'>" . _('mr') . "</option>
                                      <option value='" . _('mrs') . "'>" . _('mrs') . "</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='firstname'>" . _('firstname') . "</label>
                                  <div class='col-md-5'>
                                  <input id='firstname' name='firstname' type='text' class='form-control input-md' required=''>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='lastname'>" . _('lastname') . "</label>
                                  <div class='col-md-5'>
                                  <input id='lastname' name='lastname' type='text' class='form-control input-md' required=''>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='address'>" . _('address') . "</label>
                                  <div class='col-md-5'>
                                  <input id='address' name='address' type='text' class='form-control input-md'>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='zip'>" . _('zip') . "</label>
                                  <div class='col-md-5'>
                                  <input id='zip' name='zip' type='text' class='form-control input-md'>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='location'>" . _('location') . "</label>
                                  <div class='col-md-5'>
                                  <input id='location' name='location' type='text' class='form-control input-md'>

                                  </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>" . _('contactinformation') . "</legend>
                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='email'>" . _('email') . "</label>
                                  <div class='col-md-5'>
                                  <input id='email' name='email' type='text' class='form-control input-md' required=''>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='phone'>" . _('phone') . "</label>
                                  <div class='col-md-5'>
                                  <input id='phone' name='phone' type='text' class='form-control input-md'>

                                  </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>" . _('billingaddress') . "</legend>
                                <!-- Select Basic -->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='title2'>" . _('title') . "</label>
                                  <div class='col-md-4'>
                                    <select id='title2' name='title2' class='form-control'>
                                      <option value='" . _('mr') . "'>" . _('mr') . "</option>
                                      <option value='" . _('mrs') . "'>" . _('mrs') . "</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='firstname2'>" . _('firstname') . "</label>
                                  <div class='col-md-5'>
                                  <input id='firstname2' name='firstname2' type='text' class='form-control input-md' required=''>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='lastname2'>" . _('lastname') . "</label>
                                  <div class='col-md-5'>
                                  <input id='lastname2' name='lastname2' type='text' class='form-control input-md' required=''>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='address2'>" . _('address') . "</label>
                                  <div class='col-md-5'>
                                  <input id='address2' name='address2' type='text' class='form-control input-md'>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='zip2'>" . _('zip') . "</label>
                                  <div class='col-md-5'>
                                  <input id='zip2' name='zip2' type='text' class='form-control input-md'>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='location2'>" . _('location') . "</label>
                                  <div class='col-md-5'>
                                  <input id='location2' name='location2' type='text' class='form-control input-md'>

                                  </div>
                                </div>
                            </fieldset>

                            <!-- Multiple Checkboxes -->
                            <div class='form-group'>
                              <label class='col-md-4 control-label' for='billingaddress'>" . _('billingaddress') . "</label>
                              <div class='col-md-4'>
                              <div class='checkbox'>
                                <label for='billingaddress-0'>
                                  <input type='checkbox' name='billingaddress' id='billingaddress-0' value='1' checked>
                                  " . _('isbillingaddress') . "
                                </label>
                                </div>
                              </div>
                            </div>

                            <!-- Button -->
                            <div class='form-group'>
                              <label class='col-md-4 control-label' for='register'></label>
                              <div class='col-md-4'>
                                <button id='register' name='register' class='btn btn-default'>" . _('Register') . "</button>
                              </div>
                            </div>

                            </fieldset>
                        </form>
                </div>
            </div>
        ";
    }

}