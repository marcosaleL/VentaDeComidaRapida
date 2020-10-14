<?php

    require_once "controller/ControllerProducto.php";
    require_once "controller/ControllerUser.php";
    require_once "controller/ControllerAdmin.php";
    require_once "controller/ControllerPagina2.php";
    require_once "RouterClass.php";

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
    
    //define("HOME", BASE_URL. 'home');
    
    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "ControllerProducto", "getAndShowHome");
<<<<<<< HEAD
    $r->addRoute("listado", "GET", "ControllerPagina2", "getAndShowPag2");
    $r->addRoute("administracion", "GET", "ControllerAdmin", "GetAndShowAdministratorPage");
    $r->addRoute("login", "GET", "ControllerUser", "Login");
    $r->addRoute("logout", "GET", "ControllerUser", "Logout");  

=======
    $r->addRoute("login", "GET", "ControllerUser", "login");
    $r->addRoute("logout", "GET", "ControllerUser", "logout");  

    $r->addRoute("verifyUser", "POST", "ControllerUser", "verifyUser");
>>>>>>> 60231f3adac639453984f3ad9a20ed4da8b46d18
    $r->addRoute("verifyUser", "POST", "ControllerUser", "verifyUser");

    //Rutas de administración
    $r->addRoute("addCategory","POST","ControllerAdmin","addCategory");
    $r->addRoute("updateCategory","GET","ControllerAdmin","updateCategory");
    $r->addRoute("removeCategory","GET","ControllerAdmin","removeCategory");
    $r->addRoute("addProduct","POST","ControllerAdmin","addProduct");
    $r->addRoute("updateProduct","GET","ControllerAdmin","updateCategory");
    $r->addRoute("removeProduct","GET","ControllerAdmin","removeCategory");

    $r->setDefaultRoute("ControllerProducto", "getAndShowHome");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 


?>


