<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 06.01.16
 * Time: 21:54
 */
class Products
{

    private $products = [];

    public function __construct()
    {
        //connect to db and get page with $id
        $db = DatabaseController::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT product_id FROM product WHERE lang = '" . Trans::getDomain() . "' AND hidden != 1;";
        if ($result = $mysqli->query($sql_query)) {

            while ($row = mysqli_fetch_row($result)) {
                $this->products[] = new Product($row[0]);
            }

            /* free result set */
            mysqli_free_result($result);
        }
    }

    public function getProducts(){
        return $this->products;
    }

}