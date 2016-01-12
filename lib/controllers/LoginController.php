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
    private $model;

    public function __construct($parameter){

        if (isset($_SESSION['user'])) {

            //logout if logout link is called
            if ($parameter[1] == "logout"){
                $this->view = new LoginView();
                $this->logout();
            }
            else{
                $this->view = new CustomerView(unserialize($_SESSION['user']));
            }
        }
        else
        {
            if(isset($_POST["login"]) && isset($_POST["password"])) {
                $username = $_POST["login"];
                $password = $_POST["password"];

                $this->view = new LoginView();

                //authenticate
                if ($this->login($username,$password)){
                    $this->view = new CustomerView(unserialize($_SESSION['user']));
                }
            }else{
                $this->view = new LoginView();
            }
        }
        
        $langselect = new LanguageView($this->model);
        $langselect->render();
    }

    public function renderView(){
        $header = new HeaderView();
        $header->render();

        $this->view->render();

        $footer = new FooterView();
        $footer->render();
    }

    public function login($username, $password){

        if ($this->authenticate($username, $password)){

            /* if autentication is successful,
               write customer object to session */

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            //connect to db and get pageid
            $db = DatabaseController::getInstance();
            $mysqli = $db->getConnection();
            $sql_query = "SELECT customer_id FROM customer WHERE customer_login = '" . $username . "';";
            $result = $mysqli->query($sql_query);
            $customer_id = $result->fetch_array();
            $customer_id = $customer_id['customer_id'];

            $_SESSION['user'] = serialize(new Customer($customer_id));

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