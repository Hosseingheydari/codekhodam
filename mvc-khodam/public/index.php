<?php

require_once "./../vendor/autoload.php";
// use App\core\Router ;

use App\controllers\AuthController;
use App\core\Application ;
use App\controllers\SiteController;
use App\core\Controller ;



$app = new Application(dirname(__DIR__)) ;
// $app->router->get("/","home");
// $app->router->get("/contact" ,"contact");
// $app->router->post("/home" ,"home");
$app->router->get("/",[SiteController::class ,'home']) ;

$app->router->get("/home",[SiteController::class ,'home']) ;

$app->router->get("/contact",[SiteController::class ,'contact']) ;
$app->router->post("/contact",[SiteController::class ,'handleContact']) ;

$app->router->get("/login",[AuthController::class ,'login']) ;
$app->router->post("/login",[AuthController::class ,'login']) ;

$app->router->get("/register",[AuthController::class ,'register']) ;
$app->router->post("/register",[AuthController::class ,'register']) ;








// $app->router->get("/contact" ,"contact");

// $app->router->get("/home" ,"home");
$app->router->post("/call",function(){
    return "from call-users";
});

$app->run() ;



