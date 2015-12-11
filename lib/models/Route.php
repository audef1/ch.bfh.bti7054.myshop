<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 09.12.15
 * Time: 13:47
 */
class Route
{
    private $_uri = [];
    private $_view = [];

    public function add($uri, $view = null){
        $this->_uri[] = "/" . trim($uri, "/");

        if ($view != null){
            $this->_view[] = $view;
        }
    }

    public function getUris(){
        return $this->_uri;
    }

    public function getView($key){
        return $this->_view[$key];
    }
}