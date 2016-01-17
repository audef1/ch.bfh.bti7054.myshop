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
        echo "<script type='text/javascript' src='/myshop/js/jquery.validate.min.js'></script>";

        echo "
            <div class='content'>
                <div class='container'>
                    <div class='p-content'>
                        <div class='p-content-header'>
                            <div class='p-content-header-left'>
                                 <h1>" . Trans::_('Register') . "</h1>
                            </div>
                            <div class='p-content-header-right'>

                            </div>
                            <div class='clearfix'> </div>
                        </div>

                        <form id='regform' name='regform' action='/myshop/" . Trans::getDomain() . "/". Trans::_('register') . "' method='POST' class='form-horizontal'>
                            <fieldset>
                                <legend>" . Trans::_('logininformation') . "</legend>
                                 <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='login'>" . Trans::_('loginname') . "</label>
                                  <div class='col-md-5'>
                                  <input id='login' name='login' type='text' class='form-control input-md' required=''>
                                  </div>
                                </div>

                                <!-- Password input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='password'>" . Trans::_('password') . "</label>
                                  <div class='col-md-5'>
                                    <input id='password' name='password' type='password' class='form-control input-md' required=''>
                                  </div>
                                </div>

                                <!-- Password input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='password2'>" . Trans::_('repeat password') . "</label>
                                  <div class='col-md-5'>
                                    <input id='password2' name='password2' type='password' class='form-control input-md' required=''>
                                  </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>" . Trans::_('shippingaddress') . "</legend>
                                <!-- Select Basic -->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='title'>" . Trans::_('title') . "</label>
                                  <div class='col-md-4'>
                                    <select id='title' name='title' class='form-control' required>
                                      <option value='" . Trans::_('mr') . "'>" . Trans::_('mr') . "</option>
                                      <option value='" . Trans::_('mrs') . "'>" . Trans::_('mrs') . "</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='firstname'>" . Trans::_('firstname') . "</label>
                                  <div class='col-md-5'>
                                  <input id='firstname' name='firstname' type='text' class='form-control input-md' required>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='lastname'>" . Trans::_('lastname') . "</label>
                                  <div class='col-md-5'>
                                  <input id='lastname' name='lastname' type='text' class='form-control input-md' required>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='address'>" . Trans::_('address') . "</label>
                                  <div class='col-md-5'>
                                  <input id='address' name='address' type='text' class='form-control input-md' required>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='zip'>" . Trans::_('zip') . "</label>
                                  <div class='col-md-5'>
                                  <input id='zip' name='zip' type='text' class='form-control input-md' required>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='location'>" . Trans::_('location') . "</label>
                                  <div class='col-md-5'>
                                  <input id='location' name='location' type='text' class='form-control input-md' required>

                                  </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>" . Trans::_('contactinformation') . "</legend>
                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='email'>" . Trans::_('email') . "</label>
                                  <div class='col-md-5'>
                                  <input id='email' name='email' type='text' class='form-control input-md' required>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='phone'>" . Trans::_('phone') . "</label>
                                  <div class='col-md-5'>
                                  <input id='phone' name='phone' type='text' class='form-control input-md'>

                                  </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend>" . Trans::_('billingaddress') . "</legend>
                                <!-- Select Basic -->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='title2'>" . Trans::_('title') . "</label>
                                  <div class='col-md-4'>
                                    <select id='title2' name='title2' class='form-control'>
                                      <option value=''></option>
                                      <option value='" . Trans::_('mr') . "'>" . Trans::_('mr') . "</option>
                                      <option value='" . Trans::_('mrs') . "'>" . Trans::_('mrs') . "</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='firstname2'>" . Trans::_('firstname') . "</label>
                                  <div class='col-md-5'>
                                  <input id='firstname2' name='firstname2' type='text' class='form-control input-md'>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='lastname2'>" . Trans::_('lastname') . "</label>
                                  <div class='col-md-5'>
                                  <input id='lastname2' name='lastname2' type='text' class='form-control input-md'>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='address2'>" . Trans::_('address') . "</label>
                                  <div class='col-md-5'>
                                  <input id='address2' name='address2' type='text' class='form-control input-md'>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='zip2'>" . Trans::_('zip') . "</label>
                                  <div class='col-md-5'>
                                  <input id='zip2' name='zip2' type='text' class='form-control input-md'>

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class='form-group'>
                                  <label class='col-md-4 control-label' for='location2'>" . Trans::_('location') . "</label>
                                  <div class='col-md-5'>
                                  <input id='location2' name='location2' type='text' class='form-control input-md'>

                                  </div>
                                </div>
                            </fieldset>

                            <!-- Multiple Checkboxes -->
                            <div class='form-group'>
                              <label class='col-md-4 control-label' for='billingaddress'>" . Trans::_('billingaddress') . "</label>
                              <div class='col-md-4'>
                              <div class='checkbox'>
                                <label for='billingaddress-0'>
                                  <input type='checkbox' name='billingaddress' id='billingaddress-0' value='1' checked>
                                  " . Trans::_('isbillingaddress') . "
                                </label>
                                </div>
                              </div>
                            </div>

                            <!-- Button -->
                            <div class='form-group'>
                              <label class='col-md-4 control-label' for='register'></label>
                              <div class='col-md-4'>
                                <input type='hidden' name='reggo' id='reggo' value='1' style='display: none;' />
                                <button id='register' name='register' type='submit' class='btn btn-default'>" . Trans::_('Register') . "</button>
                              </div>
                            </div>

                            </fieldset>
                        </form>

                         <script>

                         $.validator.addMethod('nospecialchars', function(value, element) {
                                return this.optional(element) || /^[a-z A-Z 0-9 ÖÄÜäöüéèà +._-]+$/i.test(value);
                         }, 'No special Characters allowed.');

                         $('#regform').validate({
                           rules: {
                                login: {
                                  required: true,
                                  remote: {
                                        url: '/myshop/inc/logincheck.php',
                                        type: 'post',
                                  },
                                  nospecialchars: true,
                                },
                                password: 'required',
                                password2: {
                                  equalTo: '#password'
                                },
                                email: {
                                  required: true,
                                  email: true
                                },
                                phone: 'nospecialchars',
                                title: 'required',
                                firstname: {
                                    required: true,
                                    nospecialchars: true,
                                },
                                lastname: {
                                    required: true,
                                    nospecialchars: true,
                                },
                                address: {
                                    required: true,
                                    nospecialchars: true,
                                },
                                zip: {
                                    required: true,
                                    nospecialchars: true,
                                },
                                location: {
                                    required: true,
                                    nospecialchars: true,
                                },
                                firstname2: {
                                    nospecialchars: true,
                                },
                                lastname2: {
                                    nospecialchars: true,
                                },
                                address2: {
                                    nospecialchars: true,
                                },
                                zip2: {
                                    nospecialchars: true,
                                },
                                location2: {
                                    nospecialchars: true,
                                },
                           },
                           messages: {
                                login: {
                                    required: '" . Trans::_('required') . "',
                                    remote: '" . Trans::_('usertaken') . "',
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                                password: '" . Trans::_('required') . "',
                                password2: {
                                    required: '" . Trans::_('required') . "',
                                    equalTo: '" . Trans::_('notequal') . "',
                                },
                                email: {
                                    required: '" . Trans::_('required') . "',
                                    email: '" . Trans::_('validemail') . "',
                                },
                                phone: {
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                                title: {
                                    required: '" . Trans::_('required') . "',
                                },
                                firstname: {
                                    required: '" . Trans::_('required') . "',
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                                lastname: {
                                    required: '" . Trans::_('required') . "',
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                                address: {
                                    required: '" . Trans::_('required') . "',
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                                zip: {
                                    required: '" . Trans::_('required') . "',
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                                location: {
                                    required: '" . Trans::_('required') . "',
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                                firstname2: {
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                                lastname2: {
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                                address2: {
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                                zip2: {
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                                location2: {
                                    nospecialchars: '" . Trans::_('nospecialchars') . "',
                                },
                           },
                         });
                         </script>
                </div>
            </div>
        ";
    }

}

