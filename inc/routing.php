<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 09.12.15
 * Time: 13:48
 */

$route = new Route();

$route->add("/", "HomeView");

$route->add("/produkte", "ProductView");
$route->add("/produits", "ProductView");
$route->add("/products", "ProductView");

$route->add("/produkt", "SingleProductView");
$route->add("/produit", "SingleProductView");
$route->add("/product", "SingleProductView");

$route->add("/cart", "CartView");
$route->add("/warenkorb", "CartView");
$route->add("/panier", "CartView");

$route->add("/checkout", "CheckoutView");
$route->add("/kasse", "CheckoutView");
$route->add("/caisse", "CheckoutView");

$route->add("/register", "RegisterView");
$route->add("/registrieren", "RegisterView");
$route->add("/registrer", "RegisterView");

$route->add("/kontakt", "ContactView");
$route->add("/contact", "ContactView");

$route->add("/login", "LoginView");
$route->add("/logout", "LoginView");

$route->add("/myaccount", "CustomerView");

// dynamically create page-routes from db
$db = DatabaseController::getInstance();
$mysqli = $db->getConnection();
$sql_query = "SELECT `nicename` FROM pages;";
$result = $mysqli->query($sql_query);

while ($row = $result->fetch_row()) {
    $rte = "/".$row[0];
    $route->add($rte, "PageView");
}

$routecontroller = new RouteController($route);

// controlling -> show available routes
// echo $route->getRoutes();