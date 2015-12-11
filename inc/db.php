<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 04.12.15
 * Time: 11:28
 *
 * Mysql database class
 * usage:
 * $db = db::getInstance();
 * $mysqli = $db->getConnection();
 * $sql_query = "SELECT * FROM ...";
 * $result = $mysqli->query($sql_query);
 *
*/

class db {
    private $_connection;
    private static $_instance; //The single instance
    private $_host = "localhost";
    private $_username = "webshop_usr";
    private $_password = "WGBca4q9GbusLFqF";
    private $_database = "webshop_db";

    /*
    Get an instance of the Database
    @return Instance
    */
    public static function getInstance() {
        // If no instance then make one
        if(!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    // Constructor
    private function __construct() {
        $this->_connection = new mysqli($this->_host, $this->_username,
            $this->_password, $this->_database);

        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
                E_USER_ERROR);
        }
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }

    // Get mysqli connection
    public function getConnection() {
        return $this->_connection;
    }
}