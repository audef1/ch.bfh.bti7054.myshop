<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 14.01.16
 * Time: 14:53
 */

/*
 * This is how our passwords are salted.
 */

$salt = md5("Bratwurst");
echo "salt: " . $salt . "<br />";

# user is "hans"
$password = "12345678";
echo "password: " . $password . "<br />";

$saltedpassword = hash('ripemd128', $password.$salt);
echo "saltedpassword: " . $saltedpassword . "<br />";