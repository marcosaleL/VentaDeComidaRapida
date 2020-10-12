<?php
    require_once 'Controller/ControllerProducto.php';
    require_once 'Controller/ControllerUser.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "ControllerProducto", "Home");
    $r->addRoute("login", "GET", "ControllerUser", "Login");
    $r->addRoute("logout", "GET", "ControllerUser", "Logout");

    $r->addRoute("verifyUser", "POST", "ControllerUser", "verifyUser");

    $r->addRoute("mermelada", "GET", "ControllerProducto", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
