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

        //set locale acoording to model input
        $locale = $this->model->__get('lang');
        $_COOKIE['locale'] = $locale;
        
        //reload header-menu
        echo    "<script>
                    $(function() {
                        $('.top-nav').html(\"" . get_top_menu() . "\");
                    });
                </script>";

        $langs = "<li role='presentation' class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'><img src='/myshop/images/flags/" . $_COOKIE['locale'] . ".png' /></a><ul class='dropdown-menu'>";

        foreach ($this->model->__get('languages') as $locale => $lang){
            if($this->model instanceof Product) {
                $langs .= "<li class='lang'><a href='/myshop/". dcgettext($locale, "product", 6)."/" . $lang . "'><img src='/myshop/images/flags/" . $locale . ".png' />" . _($locale) . "</a></li>";
            }else{
                $langs .= "<li class='lang'><a href='/myshop/" . $lang . "'><img src='/myshop/images/flags/" . $locale . ".png' />" . _($locale) . "</a></li>";
            }
        }

        $langs .= "</ul></li>";


        echo    "<script>
                    $(function() {
                        $('.langselect').html(\"" . $langs . "\");
                    });
                </script>";

    }

}