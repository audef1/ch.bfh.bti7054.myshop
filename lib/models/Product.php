<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 04.12.15
 * Time: 11:15
 */
class Product
{
    private $name1 = "Geiler Schuh #1";
    private $name2 = "Ein Muss für jeden Schuh-Fan!";
    private $nicename = "geilerschuh1";
    private $price1 = "10.00"; //normal price
    private $price2 = "8.00"; //effective price with bargain
    private $qty = "1";
    private $description = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";
    private $details = array("amit Ihr indess erkennt, woher dieser ganze Irrthum gekommen ist, und weshalb man die Lust anklagt", "Schmerz lobet, so will ich Euch Alles eröffnen und auseinander setzen.", "was jener Begründer der Wahrheit und gleichsam Baumeister des glücklichen Lebens selbst darüber gesagt hat. Niemand, sagt er, verschmähe, oder hasse, oder fliehe die Lust als solche.", "sondern weil grosse Schmerzen ihr folgen, wenn man nicht mit Vernunft ihr nachzugehen verstehe. Ebenso werde der Schmerz als solcher von Niemand geliebt, gesucht und verlangt?");
    private $features = array("Feature 1", "Feature 2", "Feature 3");
    private $images = array("image1", "image2", "image3");
    private $lang = "de_DE";
    private $langs = array("de_DE", "en_EN", "fr_FR");

    public function __construct() {

    }

    public function get($id){

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