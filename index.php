<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 27.11.15
 * Time: 08:57
 */
?>
<?php require_once("inc/authentication.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
    </head>
    <body>
        <!--- menu and header --->
            <?php include("header.php"); ?>
        <!--- end menu and header --->

        <!--- content --->
            <?php $routecontroller->renderView(); ?>
        <!--- end content --->

        <!--- footer --->
            <?php include("footer.php"); ?>
        <!--- end footer --->
    </body>
</html>