<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 09.12.15
 * Time: 13:13
 */

session_start();

if(isset($_POST["login"]) && isset($_POST["pw"])) {
    $login = $_POST["login"];
    $pw = $_POST["pw"];
    if (checklogin($login, $pw))
        $_SESSION["user"] = $login;
}