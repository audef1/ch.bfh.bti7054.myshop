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
    private $number = "";
    private $name1 = "Geiler Schuh #1";
    private $name2 = "Ein Muss für jeden Schuh-Fan!";
    private $nicename = "geilerschuh1";
    private $price1 = "10.00"; //normal price
    private $price2 = "8.00"; //effective price with bargain
    private $stock = "1";
    private $category = "";
    private $description = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";
    private $details = array("amit Ihr indess erkennt, woher dieser ganze Irrthum gekommen ist, und weshalb man die Lust anklagt", "Schmerz lobet, so will ich Euch Alles eröffnen und auseinander setzen.", "was jener Begründer der Wahrheit und gleichsam Baumeister des glücklichen Lebens selbst darüber gesagt hat. Niemand, sagt er, verschmähe, oder hasse, oder fliehe die Lust als solche.", "sondern weil grosse Schmerzen ihr folgen, wenn man nicht mit Vernunft ihr nachzugehen verstehe. Ebenso werde der Schmerz als solcher von Niemand geliebt, gesucht und verlangt?");
    private $features = array("Feature 1", "Feature 2", "Feature 3");
    private $images = array("image1", "image2", "image3");
    private $lang = "";
    private $languages = [];
    private $translof = "";

    public function __construct($id) {
        $this->id = $id;
        //connect to db and get product with $id
        $db = DatabaseController::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT * FROM products WHERE product_id = '" . $id . "' AND hidden != 1;";
        $result = $mysqli->query($sql_query);
        $res = $result->fetch_array();

        $this->title = $res['name1'];
        $this->content = $res['name2'];
        $this->lang = $res['languages'];
        $this->translof = $res['translof'];
        /* ... */

        $result->close();

        //create list of translated versions
        $sql_query = "SELECT product_nicename, lang FROM products WHERE translof = '" . $this->translof . "' AND hidden != 1;";
        $result = $mysqli->query($sql_query);

        while ($row = $result->fetch_row()) {
            $this->languages[$row[1]] = $row[0];
        }

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