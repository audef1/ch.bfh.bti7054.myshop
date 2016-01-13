<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 18.12.15
 * Time: 12:13
 */

    if (!isset($_COOKIE['locale'])){
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $lang = $lang . "_" . strtoupper($lang);
        Trans::setDomain($lang);
        setcookie("locale",$lang,time()+(60*60*24*360));
    }
    
    
    function setNewLangInCookie() {
        $_COOKIE['locale'] = Trans::getDomain();
        //setcookie("locale",Trans::getDomain(),time()+(60*60*24*360));
    }