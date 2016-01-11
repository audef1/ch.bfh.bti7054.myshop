<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 04.12.15
 * Time: 11:15
 */
class Product
{
    private $id = "";
    private $uid = "";
    private $number = "10001";
    private $name1 = "Geiler Schuh #1";
    private $name2 = "Ein Muss für jeden Schuh-Fan!";
    private $nicename = "";
    private $price1 = "10.00"; //normal price
    private $price2 = "8.00"; //effective price with bargain
    private $stock = "1";
    private $category = "";
    private $description;
    private $details ;
    private $features;
    private $images = [];
    private $lang = "";
    private $languages = [];
    private $translof = "";
    private $amount = "1";
    private $options = "";
    private $selectedoption = "";
    private $brand = "";
    private $brand_nicename = "";

    public function __construct($id) {
        $this->uid = md5(uniqid(rand(), true));
        $this->id = $id;
        //connect to db and get product with $id
        $db = DatabaseController::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT * FROM product WHERE product_id = '" . $id . "' AND hidden != 1;";

        $result = $mysqli->query($sql_query);
        $res = $result->fetch_array();
        
        
        $this->name1 = $res['product_name1'];
        $this->name2 = $res['product_name2'];
        $this->nicename = $res['product_nicename'];
        $this->price1 = $res['product_price1'];
        $this->price2 = $res['product_price2'];
        $this->number = $res['product_number'];
        $this->options = $res['product_options'];
        $this->brand = $res['product_brand'];
        $this->images = $res['product_images'];
        $this->lang = $res['lang'];
        $this->translof = $res['translof'];
        $this->description = $res['product_description'];
        $this->details = $res['product_details'];
        $this->features = $res['product_features'];

        $result->close();

        //get brand
        $sql_query = "SELECT brand_nicename, brand_name FROM product_brand WHERE brand_id = " . $this->brand . ";";
        
        
        $result = $mysqli->query($sql_query);
        $res = $result->fetch_array();

        $this->brand_nicename = $res['brand_nicename'];
        $this->brand = $res['brand_name'];

        $result->close();

        //create list of translated versions
        $sql_query = "SELECT product_nicename, lang FROM product WHERE translof = '" . $this->translof . "' AND hidden != 1;";
        $result = $mysqli->query($sql_query);

        while ($row = $result->fetch_row()) {
            $this->languages[$row[1]] = $row[0];
        }

        $result->close();

        //get stock from stock table
        $sql_query = "SELECT stock FROM product_stock WHERE product_number = '" . $this->number . "';";
        $result = $mysqli->query($sql_query);
        $res = $result->fetch_array();

        $this->stock = $res['stock'];

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

    public function updateUid(){
        $this->uid = md5(uniqid(rand(), true));
    }
}