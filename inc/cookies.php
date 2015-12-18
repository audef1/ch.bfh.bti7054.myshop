<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 18.12.15
 * Time: 12:13
 */

    if (!isset($_COOKIE['locale'])){
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $_COOKIE['locale'] = $lang;
    }

    //echo "<pre> BROWSER-LANG: " . $_COOKIE['locale'] . "</pre>";