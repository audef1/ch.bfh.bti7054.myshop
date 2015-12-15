<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 11.12.15
 * Time: 09:43
 */
class RouteController
{
    private $model;
    private $uriView = "";
    private $additionalParam = "";

    public function __construct(Route $model)
    {
        $this->model = $model;

        // get all the parameters from the page uri
        $uriGetParam = isset($_GET['uri']) ? "/" . $_GET['uri'] : '/';

        $uriView = explode("/",$uriGetParam);
        $this->uriView = "/" . $uriView[1];

        $this->additionalParam = explode("/", $uriGetParam);
    }

    public function renderView(){

        foreach ($this->model->getUris() as $key => $value) {

            if (preg_match("#^$value$#", $this->uriView)){

                if ($this->model->getView($key) === "PageView"){
                    //connect to db and get pageid
                    $db = db::getInstance();
                    $mysqli = $db->getConnection();
                    $sql_query = "SELECT `page_id` FROM `pages` WHERE `nicename` = '" . str_replace('/','',$value) . "' AND `hidden` != 1;";
                    $result = $mysqli->query($sql_query);
                    $page_id = $result->fetch_array();

                    //change language to language of selected page

                    $page = new Page($page_id['page_id']);
                    $view = new PageView($page);

                    $langselect = new LanguageView($page);
                    $langselect->render();
                }
                else if ($this->model->getView($key) === "SingleProductView"){
                    //db query for product nicename
                    $product_id = 10;
                    $view = new SingleProductView(new Product($product_id));
                }
                else {
                    $useView = $this->model->getView($key);
                    $view = new $useView();
                }
                $view->render();
            }
        }
    }
}