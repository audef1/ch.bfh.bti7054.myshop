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
        $this->view = new RegisterView();
        
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
        $sql_query = "INSERT INTO `customer` (`customer_title`,
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
                                              `customer_billingaddress` )
                                              VALUES ('$id', '$products');";






        $mysqli->query($sql_query);
        $mysqli->commit();

        //get customernumber from name
        //create hashed password and salt, store it in db

        //get input from POST

        //do query!


    }

}