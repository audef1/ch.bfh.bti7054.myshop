<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 23.12.15
 * Time: 17:22
 */
class LoginController
{
    public function __construct(){

    }

    public function login($username, $password){

        if ($this->authenticate($username, $password)){

            /* if autentication is successful,
               write customer object to session */

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['user'] = serialize(new Customer($username));

            return true;
        }
        else{
            return false;
        }
    }

    public function logout(){
        session_destroy();
    }

    static function authenticate($username, $password){

        //go to db and check username with the salts and password
        //return true / false

        return true;
    }

}