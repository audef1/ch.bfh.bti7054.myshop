<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 09.12.15
 * Time: 13:34
 */
class Page
{
    private $id = "";
    private $title = "";
    private $content = "";
    private $lang = "";
    private $languages = [];
    private $translof = "";

    public function __construct($id) {
        $this->id = $id;
        //connect to db and get page with $id
        $db = db::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT * FROM pages WHERE page_id = '" . $id . "' AND hidden != 1;";
        $result = $mysqli->query($sql_query);
        $res = $result->fetch_array();

        $this->title = $res['title'];
        $this->content = $res['content'];
        $this->lang = $res['lang'];
        $this->translof = $res['translof'];

        $result->close();

        //create list of translated versions
        $sql_query = "SELECT nicename, lang FROM pages WHERE translof = '" . $this->translof . "' AND hidden != 1;";
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