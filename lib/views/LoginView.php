<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 20.12.15
 * Time: 13:46
 */
class LoginView
{

    private $error;

    public function __construct() {

    }

    public function usernotfound(){
        $this->error = "<div class='container'><div class='alert alert-danger message' role='alert'>" . _("User not found") . "</div></div>";
    }

    public function wrongpassword(){
        $this->error = "<div class='container'><div class='alert alert-warning message' role='alert'>" . _("Wrong Password") . "</div></div>";
    }

    public function render() {
        echo $this->error . "
            <div class='content'>
                <div class='container'>
                    <div class='p-content'>
                        <div class='p-content-header'>
                            <div class='p-content-header-left'>
                                 <h1>" . _('Login') . "</h1>
                            </div>
                            <div class='p-content-header-right'>

                            </div>
                            <div class='clearfix'> </div>
                        </div>

                        <form action='login' method='post'>
                            <p>
                                <label>" . _('Login') . "</label>
                                <input name='login'>
                            </p>
                            <p>
                                <label>" . _('Password') . "</label>
                                <input type='password' name='password'>
                            </p>
                            <p>
                                <input type='submit' value='" . _('Submit') . "'>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        ";

    }

}