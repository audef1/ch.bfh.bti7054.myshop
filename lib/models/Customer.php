<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 20.12.15
 * Time: 13:10
 */
class Customer
{

    private $id = "";
    private $username = "";

    public function __construct($username){
        $this->username = $username;
    }

    public function get($id){

    }

    public function update($id){

    }

    public function delete($id){

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