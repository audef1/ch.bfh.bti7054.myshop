<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 15.01.16
 * Time: 10:41
 */

if (!isset($_POST['login'])){
    die;
}
else{
    $customers = [];

    include_once('../lib/controllers/DatabaseController.php');

    //connect to db and get page with $id
    $db = DatabaseController::getInstance();
    $mysqli = $db->getConnection();
    $sql_query = "SELECT customer_login FROM customer;";
    $result = $mysqli->query($sql_query);

    while ($row = $result->fetch_row()) {
        $customers[] = $row[0];
    }

    $result->close();

    if (in_array($_POST['login'], $customers)){
        return false;
    }
    else{
        return true;
    }
}