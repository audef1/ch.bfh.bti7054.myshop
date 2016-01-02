<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 20.12.15
 * Time: 13:10
 */
class Customer
{

    private $id;
    private $title;
    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $phone;
    private $address;
    private $zip;
    private $location;
    private $title2;
    private $firstname2;
    private $lastname2;
    private $address2;
    private $zip2;
    private $location2;
    private $billingaddress;

    public function __construct($id){

        //connect to db and get customer with $id
        $db = DatabaseController::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT * FROM customer WHERE customer_id = '" . $id ."';";
        $result = $mysqli->query($sql_query);
        $res = $result->fetch_array();

        $this->id = $id;
        $this->title = $res['customer_title'];
        $this->firstname = $res['customer_firstname'];
        $this->lastname = $res['customer_lastname'];
        $this->username = $res['customer_login'];
        $this->email = $res['customer_email'];
        $this->phone = $res['customer_phone'];
        $this->address = $res['customer_address'];
        $this->zip = $res['customer_zip'];
        $this->location = $res['customer_location'];
        $this->title2 = $res['customer_title2'];
        $this->firstname2 = $res['customer_firstname2'];
        $this->lastname2 = $res['customer_lastname2'];
        $this->address2 = $res['customer_address2'];
        $this->zip2 = $res['customer_zip2'];
        $this->location2 = $res['customer_location2'];
        $this->billingaddress = $res['customer_billingaddress'];

        $result->close();
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }

}