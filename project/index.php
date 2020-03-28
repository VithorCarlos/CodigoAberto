<?php
ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;


$router = new Router(site());
$router->namespace("Source\Controllers");

$router->group(null);
$router->get("/", "Web:login", "web.login");
$router->get("/cadastrar", "Web:register", "web.register");
$router->get("/recuperar", "Web:forget", "web.forget");
$router->get("/senha{email}/{forget}", "Web:reset", "web.reset");

/**
 * Auth
 */

/**
 * Auth Social
 */

/**
 * Profile
 */

/**
 * Errors
 */
$router->group("ops");
$router->get("/{errcode}", "Web:error","web.error");

/**
 * Router Process
 */
$router->dispatch();

/**
 * Error Process
 */
if($router->error()){
    $router->redirect("web.error", ["errcode" => $router->error()]);
}

ob_end_flush();