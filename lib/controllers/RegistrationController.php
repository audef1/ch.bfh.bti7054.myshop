<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 10.01.16
 * Time: 16:27
 */
class RegistrationController
{
    private $view;
    private $parameter;

    public function __construct($parameter)
    {
        $this->parameter = $parameter;

        if (isset($_POST['reggo']) && $_POST['reggo'] == 1){
            $this->registerCustomer();
            $this->view = new LoginView();
        }
        else{
            $this->view = new RegisterView();
        }
        
        $langselect = new LanguageView(null);
        $langselect->render();
    }

    public function renderView(){
        $header = new HeaderView($this->parameter);
        $header->render();

        $this->view->render();

        $footer = new FooterView();
        $footer->render();
    }

    public function registerCustomer(){

        $salt = md5($_POST['firstname'] . $_POST['lastname']);
        $password = hash('ripemd128', $_POST['password'] . $salt);

        $db = DatabaseController::getInstance();
        $mysqli = $db->getConnection();
        $stmt = $mysqli->prepare("INSERT INTO `customer`(`customer_title`,
                                                          `customer_firstname`,
                                                          `customer_lastname`,
                                                          `customer_login`,
                                                          `customer_password`,
                                                          `customer_email`,
                                                          `customer_phone`,
                                                          `customer_address`,
                                                          `customer_zip`,
                                                          `customer_location`,
                                                          `customer_title2`,
                                                          `customer_firstname2`,
                                                          `customer_lastname2`,
                                                          `customer_address2`,
                                                          `customer_zip2`,
                                                          `customer_location2`,
                                                          `customer_billingaddress`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param('sssssssssssssssss', $_POST['title'],
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['login'],
            $password,
            $_POST['email'],
            $_POST['phone'],
            $_POST['address'],
            $_POST['zip'],
            $_POST['location'],
            $_POST['title2'],
            $_POST['firstname2'],
            $_POST['lastname2'],
            $_POST['address2'],
            $_POST['zip2'],
            $_POST['location2'],
            $_POST['billingaddress']
        );
        $stmt->execute();
        $stmt->close();

        //get customernumber from name add salt to salttable
        $db = DatabaseController::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT `customer_id` FROM `customer` WHERE `customer_login` = '" . $_POST['login'] . "';";
        $result = $mysqli->query($sql_query);
        $customer_id = $result->fetch_array();
        $customer_id = $customer_id['customer_id'];

        $db = DatabaseController::getInstance();
        $mysqli = $db->getConnection();
        $stmt = $mysqli->prepare("INSERT INTO `salts`(`customer_id`, `salt`) VALUES (?, ?)");
        $stmt->bind_param('ss', $customer_id, $salt);
        $stmt->execute();
        $stmt->close();

        mail($_POST['email'], "Your myShop Registration", "Hello " . $_POST['firstname'] . " " . $_POST['lastname'] . "\n\n Your Login Information:\n--------\nUsername: " . $_POST['login'] . "\nPassword: " . $_POST['password'] . "\n--------\n\n Best wishes\nYour myShop Team" );

    }

}