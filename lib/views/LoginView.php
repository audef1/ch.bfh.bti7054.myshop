<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 20.12.15
 * Time: 13:46
 */
class LoginView
{

    private $message;

    public function __construct() {

    }

    public function usernotfound(){
        $this->message = "<div class='container'><div class='alert alert-danger message' role='alert'>" . Trans::_("User not found") . "</div></div>";
    }

    public function wrongpassword(){
        $this->message = "<div class='container'><div class='alert alert-warning message' role='alert'>" . Trans::_("Wrong Password") . "</div></div>";
    }

    public function render() {
        echo "<script type='text/javascript' src='/myshop/js/jquery.validate.min.js'></script>";

        echo $this->message . "
            <div class='content'>
                <div class='container'>
                    <div class='p-content'>
                        <div class='p-content-header'>
                            <div class='p-content-header-left'>
                                 <h1>" . Trans::_('Login') . "</h1>
                            </div>
                            <div class='p-content-header-right'>

                            </div>
                            <div class='clearfix'> </div>
                        </div>

                        <form id='loginform' action='login' method='post'>
                            <p>
                                <label>" . Trans::_('Login') . "</label>
                                <input name='login' required>
                            </p>
                            <p>
                                <label>" . Trans::_('Password') . "</label>
                                <input type='password' name='password' required>
                            </p>
                            <p>
                                <input type='submit' value='" . Trans::_('Submit') . "'>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        ";

        //check the form
        echo "<script>$('#loginform').validate();</script>";

    }

}