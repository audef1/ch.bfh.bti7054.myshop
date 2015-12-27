<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 20.12.15
 * Time: 14:03
 */


session_start();

if(isset($_POST["login"]) && isset($_POST["password"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];
    if (checklogin($login, $password)){
        $_SESSION["user"] = $login;
    }
}

if (!isset($_SESSION["user"])) {
    exit;
}

function checklogin($login,$password) {
    $db = db::getInstance();
    $mysqli = $db->getConnection();

    if ($stmt = $mysqli->prepare("SELECT * FROM customer WHERE customer_login=?")) {

        $stmt->bind_param('s', $login);
        $stmt->execute();
        $stmt->bind_result($blaa);

        echo "<pre>" . $blaa . "</pre>";

        $result = $stmt->get_result();

        print_r($result);

//        if (!$result || $result->num_rows==0){
//            return false;
//        }
//        else {
//            $row = $result->fetch_assoc();
//
//            $salt=$row["salt"];
//            $hash=$row["hash"];
//
//            if (hash('ripemd128',$password+$salt)===$hash)
//                return true;
//            else
//                return false;
//        }

        $stmt->close();
    }
}