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

        if (!isset($_SESSION['cart'])) {
            $cart = new Cart();
            $_SESSION['cart'] = serialize($cart);
        }

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
                else if ($this->model->getView($key) === "ProductView"){
                    $products = new Products();
                    $view = new ProductView($products);
                }
                else if ($this->model->getView($key) === "SingleProductView"){

                    $params = $this->additionalParam;

                    if (!isset($params[2])){
                        $product_id = 1;
                    }
                    else{
                        //connect to db and get productid
                        $db = DatabaseController::getInstance();
                        $mysqli = $db->getConnection();
                        $sql_query = "SELECT `product_id` FROM `product` WHERE `product_nicename` = '" . $params[2] . "' AND `hidden` != 1;";
                        if ($result = $mysqli->query($sql_query)){
                            $product_id = $result->fetch_array();
                            $product_id = $product_id['product_id'];
                        }
                        else{
                            $product_id = 1;
                        }
                    }

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
                else if($this->model->getView($key) === "CustomerView"){
                    if (isset($_SESSION['user'])) {
                        $view = new CustomerView(unserialize($_SESSION['user']));
                    }
                    else{
                        $view = new LoginView();
                    }
                }
                else if($this->model->getView($key) === "CartView") {

                    $cart = unserialize($_SESSION['cart']);
                    $params = $this->additionalParam;

                    // set variables
                    if (isset($params[2])){
                        $action = $params[2];
                    }
                    if (isset($params[3])){
                        $productnr = $params[3];
                        $uid = $params[3];
                    }
                    if (isset($params[4])){
                        $amount = $params[4];
                    }
                    if (isset($params[5])){
                        $option = $params[5];
                    }

                    //update
                    if (!empty($action) && $action == "update" && !empty($uid) && !empty($amount)){
                        $cart->update($uid, $amount);
                    }

                    //delete
                    if (!empty($action) && $action == "delete" && !empty($uid)){
                        $cart->remove($uid);
                    }

                    //add
                    if (!empty($action) && $action == "add"){

                        //connect to db and get productid
                        $db = DatabaseController::getInstance();
                        $mysqli = $db->getConnection();
                        $sql_query = "SELECT `product_id` FROM `product` WHERE `product_number` = '" . $productnr . "';";
                        if ($result = $mysqli->query($sql_query)){
                            $product_id = $result->fetch_array();
                            $product_id = $product_id['product_id'];
                        }
                        else{
                            $product_id = 1;
                        }

                        //create new product for cart and update its values according selection
                        $newproduct = new Product($product_id);
                        $newproduct->__set('selectedoption', $option);
                        $newproduct->updateUid();
                        $newproduct->__set('amount', $amount);
                        $cart->add($newproduct);
                    }

                    $_SESSION['cart'] = serialize($cart);
                    $view = new CartView($cart);
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