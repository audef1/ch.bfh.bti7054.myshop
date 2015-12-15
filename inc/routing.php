<?php
/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 09.12.15
 * Time: 13:48
 */

$route = new Route();

$route->add("/", "HomeView");
$route->add("/products", "ProductView");
$route->add("/product", "SingleProductView");
$route->add("/contact", "ContactView");

// dynamically create page-routes from db
$db = db::getInstance();
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