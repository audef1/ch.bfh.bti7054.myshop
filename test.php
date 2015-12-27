<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 27.12.15
 * Time: 12:36
 */



$password = "Schnaps!";

echo "Passwort: " . $password . "<br/>";


//$randomsalt = bin2hex(openssl_random_pseudo_bytes(8));
$salt = "1ca250540cc48a75";
echo "Salt: " . $salt . "<br />";

$saltedpass = hash("ripemd128",$password+$salt);

echo "Salted Password: " . $saltedpass;

