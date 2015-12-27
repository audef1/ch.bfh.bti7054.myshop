<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 27.11.15
 * Time: 09:58
 */

function get_top_menu() {
    $menu = "<ul class='top-nav'>";

    /*
     * db query for pages
    $pages = queryresult
    mockup data
    */

    $pages = array();
    $pages = array( "0" => array("0" => "Produkte", "1" => "/myshop/products"),
                    "1" => array("0" => "Über uns", "1" => "/myshop/about"),
                    "2" => array("0" => "Versand", "1" => "/myshop/shipping"),
                    "3" => array("0" => "Kontakt", "1" => "/myshop/contact"),
    );

    foreach ($pages as $page) {
        $menu .= "<li><a href='". $page[1] ."'>". $page[0] ."</a><span></span></li>";
    }

    $menu .= "<div class='clearfix'></div></ul>";
    return $menu;
}

function get_bottom_menu() {
    $menu = "<ul class='unstyled-list list-inline'>";

    /*
     * db query for pages
    $pages = queryresult
    mockup data
    */

    $pages = array();
    $pages = array( "0" => array("0" => "Produkte", "1" => "/products"),
        "1" => array("0" => "Über uns", "1" => "/myshop/about"),
        "2" => array("0" => "Versand", "1" => "/myshop/shipping"),
        "3" => array("0" => "Kontakt", "1" => "/myshop/contact"),
    );

    $l = count($pages);

    for ($i = 0; $i < $l; $i++) {
        if ($i == $l-1)
            $menu .= "<li><a href='" . $pages[$i][1] . "'> " . $pages[$i][0] ."</a></li>";
        else
            $menu .= "<li><a href='" . $pages[$i][1] . "'> " . $pages[$i][0] ."</a><span></span></li>";
    }

    $menu .= "<div class='clearfix'></div></ul>";
    return $menu;
}