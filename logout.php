<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 20.12.15
 * Time: 14:03
 */

    session_start();
    $_SESSION = array();

    setcookie(session_name(),1);
    session_destroy();

    header("location:/");