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
                    $pagecontroller = new PageController($this->additionalParam);
                    $pagecontroller->renderView();
                }
                else if ($this->model->getView($key) === "ProductView"){
                    $productscontroller = new ProductsController();
                    $productscontroller->renderView();
                }
                else if ($this->model->getView($key) === "SingleProductView"){
                    $singleproductcontroller = new SingleProductController($this->additionalParam);
                    $singleproductcontroller->renderView();
                }
                else if ($this->model->getView($key) === "LoginView"){
                    $logincontroller = new LoginController($this->additionalParam);
                    $logincontroller->renderView();
                }
                else if($this->model->getView($key) === "CustomerView"){
                    $customercontroller = new CustomerController();
                    $customercontroller->renderView();
                }
                else if($this->model->getView($key) === "CartView") {
                    $cartcontroller = new CartController($this->additionalParam);
                    $cartcontroller->renderView();
                }
                else {
                    $useView = $this->model->getView($key);
                    $view = new $useView();
                    $view->render();
                }
            }
        }
    }
}