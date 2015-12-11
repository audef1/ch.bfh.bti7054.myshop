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
$route->add("/about", "PageView");
$route->add("/shipping", "PageView");
$route->add("/ueberuns", "PageView");

$routecontroller = new RouteController($route);