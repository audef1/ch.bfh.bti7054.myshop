<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 10.01.16
 * Time: 16:01
 */
class PageController
{
    private $view;

    public function __construct($parameter)
    {
        $nicename = $parameter[1];

        //connect to db and get pageid
        $db = DatabaseController::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT `page_id` FROM `pages` WHERE `nicename` = '" . $nicename . "' AND `hidden` != 1;";
        $result = $mysqli->query($sql_query);
        $page_id = $result->fetch_array();
        $page_id = $page_id['page_id'];

        //change language to language of selected page

        $page = new Page($page_id);
        $this->view = new PageView($page);

        $langselect = new LanguageView($page);
        $langselect->render();
    }

    public function renderView(){
        $this->view->render();
    }

}