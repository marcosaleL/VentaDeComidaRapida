<?php

    require_once "controller/ControllerProducto.php";
    require_once "controller/ControllerUser.php";
    require_once "controller/ControllerAdmin.php";
    require_once "controller/ControllerListado.php";
    require_once "RouterClass.php";

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
    
    //define("HOME", BASE_URL. 'home');
    
    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "ControllerProducto", "getAndShowHome");
    $r->addRoute("listado", "GET", "ControllerListado", "getAndShowList");
    $r->addRoute("administracion", "GET", "ControllerAdmin", "GetAndShowAdministratorPage");
    $r->addRoute("login", "GET", "ControllerAdmin", "GetAndShowAdministratorPage");
    
    //Usuario
    $r->addRoute("login", "POST", "ControllerUser", "login");
    $r->addRoute("verifyUser", "POST", "ControllerUser", "verifyUser");
    $r->addRoute("logout", "GET", "ControllerUser", "logout");  

    //Categorias
    $r->addRoute("addCategory","POST","ControllerAdmin","addCategory");
    $r->addRoute("updateCategory","GET","ControllerAdmin","updateCategory");
    $r->addRoute("removeCategory","GET","ControllerAdmin","removeCategory");

    //Productos
    $r->addRoute("addProduct","GET","ControllerAdmin","addProduct");
    $r->addRoute("updateProduct","GET","ControllerAdmin","updateProduct");
    $r->addRoute("removeProduct","GET","ControllerAdmin","removeProduct");
    
    //Default
    $r->setDefaultRoute("ControllerProducto", "getAndShowHome");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 


?>


