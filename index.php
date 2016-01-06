<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 27.11.15
 * Time: 08:57
 */
require_once("inc/autoloader.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once("inc/head.php"); ?>
    </head>
    <body>
        <!--- menu and header --->
        <?php
            $header = new HeaderView();
            $header->render();
        ?>
        <!--- end menu and header --->

        <!--- content --->
        <?php
            $routecontroller->renderView();

            //update headerinfo (buttons)
            $header->update();
        ?>
        <!--- end content --->

        <!--- footer --->
        <?php
            $footer = new FooterView();
            $footer->render();
        ?>
        <!--- end footer --->
    </body>
</html>