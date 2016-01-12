<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 27.11.15
 * Time: 08:57
 */
require_once("inc/autoloader.php");
session_start();
Trans::init();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once("inc/head.php"); ?>
    </head>
    <body>
        <!--- content --->
        <?php
            $routecontroller->renderView();
        ?>
        <!--- end content --->
    </body>
</html>