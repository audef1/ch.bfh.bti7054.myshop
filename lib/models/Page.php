<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 09.12.15
 * Time: 13:34
 */
class Page
{
    private $title = "";
    private $content = "";

    public function __construct($id) {
        //connect to db and get page with $id
        $db = db::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT * FROM pages WHERE page_id = '" . $id . "' AND hidden != 1 AND lang = 'de_DE';";
        $result = $mysqli->query($sql_query);
        $result = $result->fetch_array();

        $this->title = $result['title'];
        $this->content = $result['content'];

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