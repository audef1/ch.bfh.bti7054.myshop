<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 12.12.15
 * Time: 11:07
 */
class LanguageView
{

    private $model = "";

    public function __construct($model) {
        $this->model = $model;
    }

    public function render(){
        $langs = "";

        foreach ($this->model->__get('languages') as $locale => $lang){
            $locale = substr($locale,0,2);
            $langs .= "<li class='". $locale ."'><a href='/myshop/" . $lang . "'><img src='/myshop/images/flags/" . $locale . ".png' /></a></li>";
        }

        echo    "<script>
                    $(function() {
                        $('.langselect').html(\"" . $langs . "\");
                    });
                </script>";

        //set locale acoording to model input
        $locale = $this->model->__get('lang');
        $this->setLang($locale);
    }

    private function setLang($locale){
        putenv("LC_ALL=$locale");
        setlocale(LC_ALL, $locale);
        bindtextdomain("messages", "./locale");
        textdomain("messages");
    }

}