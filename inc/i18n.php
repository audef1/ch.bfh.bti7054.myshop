<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 04.12.15
 * Time: 11:41
 */

 //Internationalisation
if (isset($_COOKIE['locale']))
     $locale = $_COOKIE['locale'];

Trans::setDomain($locale);