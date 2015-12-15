<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 12.12.15
 * Time: 11:07
 */
class LanguageController
{

    private $langs = [];

    public function __construct($model){

        $this->langs = $model->langs;

        if (get_class($model) == "Product"){

        }
        else if (get_class($model) == "Page"){

        }
    }
}