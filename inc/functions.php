<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 27.11.15
 * Time: 09:58
 */

function get_top_menu() {
    $menu = "<ul class='top-nav'>";

    $lang = Trans::getDomain();
    $pages = array();

        //add products page to menu
        if ($lang == "en_EN"){
            $pages[] = array("Products", "/myshop/en_EN/products");
        }
        else if ($lang == "de_DE"){
            $pages[] = array("Produkte", "/myshop/de_DE/produkte");
        }
        else if ($lang == "fr_FR"){
            $pages[] = array("Produits", "/myshop/fr_FR/produits");
        }

    // dynamically create page-routes from db
    $db = DatabaseController::getInstance();
    $mysqli = $db->getConnection();
    $sql_query = "SELECT `nicename`,`title`,`pos` FROM pages WHERE lang = '". $lang ."' AND inmenu = '1' ORDER BY pos DESC;";
    $result = $mysqli->query($sql_query) or trigger_error($mysqli->error."[$sql_query]");

    while ($row = $result->fetch_row()) {
        $pages[] = array(($row[1]), "/myshop/" . Trans::getDomain(). "/" . $row[0]);
    }

        //add contact page to menu
        if ($lang == "en_EN"){
            $pages[] = array("Contact", "/myshop/en_EN/contact");
        }
        else if ($lang == "fr_FR"){
            $pages[] = array("Contact", "/myshop/fr_FR/contact");
        }
        else if ($lang == "de_DE"){
            $pages[] = array("Kontakt", "/myshop/de_DE/kontakt");
        }

    foreach ($pages as $page) {
        $menu .= "<li><a href='" . $page[1] ."'>". $page[0] ."</a><span></span></li>";
    }

    $menu .= "<div class='clearfix'></div></ul>";
    return $menu;
}

function get_bottom_menu() {
    $menu = "<ul class='unstyled-list list-inline'>";

    $lang = Trans::getDomain();
    $pages = array();

        //add products page to menu
        if ($lang == "en_EN"){
            $pages[] = array("Products", "/myshop/products");
        }
        else if ($lang == "de_DE"){
            $pages[] = array("Produkte", "/myshop/produkte");
        }
        else if ($lang == "fr_FR"){
            $pages[] = array("Produits", "/myshop/produits");
        }

    // dynamically create page-routes from db
    $db = DatabaseController::getInstance();
    $mysqli = $db->getConnection();
    $sql_query = "SELECT `nicename`,`title`,`pos` FROM pages WHERE lang = '". $lang ."' AND inmenu = '1' ORDER BY pos DESC;";
    $result = $mysqli->query($sql_query) or trigger_error($mysqli->error."[$sql_query]");

    while ($row = $result->fetch_row()) {
        $pages[] = array(($row[1]), "/myshop/" . $row[0]);
    }

        //add contact page to menu
        if ($lang == "en_EN" || $lang == "fr_FR"){
            $pages[] = array("Contact", "/myshop/contact");
        }
        else if ($lang == "de_DE"){
            $pages[] = array("Kontakt", "/myshop/kontakt");
        }

    $l = count($pages);

    //add menu with separators
    for ($i = 0; $i < $l; $i++) {
        if ($i == $l-1)
            $menu .= "<li><a href='" . $pages[$i][1] . "'> " . $pages[$i][0] ."</a></li>";
        else
            $menu .= "<li><a href='" . $pages[$i][1] . "'> " . $pages[$i][0] ."</a><span></span></li>";
    }

    $menu .= "<div class='clearfix'></div></ul>";
    return $menu;
}