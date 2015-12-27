<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 20.12.15
 * Time: 13:46
 */
class LoginView
{

    public function __construct() {

    }

    public function render() {
        echo "
            <div class='content'>
                <div class='container'>
                    <h1>" . _('Login') . "</h1>
                    <form action='login' method='post'>
                        <p>
                            <label>Login</label>
                            <input name='login'>
                        </p>
                        <p>
                            <label>Password</label>
                            <input type='password' name='password'>
                        </p>
                        <p>
                            <input type='submit' value='Login'>
                        </p>
                    </form>
                </div>
            </div>
        ";
    }

}