<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 23.12.15
 * Time: 17:22
 */
class LoginController
{
    private $view;

    public function __construct(LoginView $view){
        $this->view = $view;
    }

    public function login($username, $password){

        if ($this->authenticate($username, $password)){

            /* if autentication is successful,
               write customer object to session */

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['user'] = serialize(new Customer($username));

            return true;
        }
        else{
            return false;
        }
    }

    public function logout(){
        session_unset();
        session_destroy();
    }

    private function authenticate($username, $password)
    {

        $db = DatabaseController::getInstance();
        $mysqli = $db->getConnection();

        $query = "SELECT customer.customer_id, customer.customer_login, customer.customer_password, salts.salt
                  FROM customer
                  INNER JOIN salts
                  ON customer.customer_id = salts.customer_id
                  WHERE customer_login = ?;";

        if(!$stmt = $mysqli->prepare($query)) {
            return false;
        } else {
            $stmt->bind_param("s", $username);
            $stmt->execute();

            $result = $stmt->get_result();

            if (!$result || $result->num_rows == 0) {
                $this->view->usernotfound();
                return false;
            } else {
                $row = $result->fetch_assoc();

                $salt = $row["salt"];
                $hash = $row["customer_password"];

                //debug info
                //echo "<pre>Passwort: " . $password . "<br />Salt: " . $salt . "<br />To Hash: " . $password . $salt . "<br />Customer Hash: " . $hash . "<br />Generated Hash: ". hash('ripemd128', $password.$salt) . "</pre>";

                if (hash('ripemd128', $password.$salt) === $hash) {
                    return true;
                }
                else {
                    $this->view->wrongpassword();
                    return false;
                }

            }
            $stmt->close();
        }
    }
}