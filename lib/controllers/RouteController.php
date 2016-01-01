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
                    $db = DatabaseController::getInstance();
                    $mysqli = $db->getConnection();
                    $sql_query = "SELECT `page_id` FROM `pages` WHERE `nicename` = '" . str_replace('/','',$value) . "' AND `hidden` != 1;";
                    $result = $mysqli->query($sql_query);
                    $page_id = $result->fetch_array();
                    $page_id = $page_id['page_id'];

                    //change language to language of selected page

                    $page = new Page($page_id);
                    $view = new PageView($page);

                    $langselect = new LanguageView($page);
                    $langselect->render();
                }
                else if ($this->model->getView($key) === "SingleProductView"){
                    //db query for product nicename
                    $product_id = 5;

                    $product = new Product($product_id);
                    $view = new SingleProductView($product);

                    $langselect = new LanguageView($product);
                    $langselect->render();
                }
                else if ($this->model->getView($key) === "LoginView"){
                    if (isset($_SESSION['user'])) {

                        //logout if logout link is called
                        if (str_replace('/','',$value) == "logout"){
                            $view = new LoginView();
                            $controller = new LoginController($view);
                            $controller->logout();
                        }
                        else{
                            $view = new CustomerView(unserialize($_SESSION['user']));
                        }
                    }
                    else
                    {
                        if(isset($_POST["login"]) && isset($_POST["password"])) {
                            $username = $_POST["login"];
                            $password = $_POST["password"];

                            $view = new LoginView();
                            $controller = new LoginController($view);

                            //authenticate
                            if ($controller->login($username,$password)){
                                $view = new CustomerView(unserialize($_SESSION['user']));
                            }
                        }else{
                            $view = new LoginView();
                        }
                    }
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