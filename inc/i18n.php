<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 04.12.15
 * Time: 11:41
 */

 //Internationalisation
 $locale = "de_DE"; //default language
 if (isSet($_GET["locale"]))
     $locale = $_GET["locale"];
 putenv("LC_ALL=$locale");
 setlocale(LC_ALL, $locale);
 bindtextdomain("messages", "./locale");
 textdomain("messages");