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
    $r->addRoute("productos", "GET", "ControllerProducto", "getAndShowListadoProductos");
    $r->addRoute("productos/:ID", "GET", "ControllerProducto", "getAndShowProducto");
    $r->addRoute("categorias", "GET", "ControllerListado", "getAndShowListadoCategorias");
    $r->addRoute("categorias/:ID", "GET", "ControllerListado", "getAndShowCategoria");
    $r->addRoute("administracion", "GET", "ControllerAdmin", "GetAndShowAdministratorPage");
    $r->addRoute("login", "GET", "ControllerAdmin", "GetAndShowAdministratorPage");

    //Registro
    $r->addRoute("registro","GET","ControllerUser","registro");
    $r->addRoute("register","POST","ControllerUser","registerUser");

    //Permisos de usuarios
    $r->addRoute("usuariosAdmin","POST","ControllerAdmin","quitarPermisos");
    $r->addRoute("usuariosNoAdmin","POST","ControllerAdmin","darPermisos");
    
    //Usuario
    $r->addRoute("login", "POST", "ControllerUser", "login");
    $r->addRoute("verifyUser", "POST", "ControllerUser", "verifyUser");
    $r->addRoute("logout", "GET", "ControllerUser", "logout");  

    //Categorias
    $r->addRoute("addCategory","POST","ControllerAdmin","addCategory");
    $r->addRoute("updateCategory","GET","ControllerAdmin","updateCategory");
    $r->addRoute("removeCategory/:ID","GET","ControllerListado","removeCategory");

    //Productos
    $r->addRoute("addProduct","POST","ControllerAdmin","addProduct");
    $r->addRoute("updateProduct", "GET","ControllerAdmin","updateProduct");
    $r->addRoute("removeProduct/:ID","GET","ControllerProducto","removeProduct");

//  Esta no se si es util
//  $r->addRoute("updateProduct/:ID", "GET", "ControllerAdmin", "editProduct");
    
    //Default
    $r->setDefaultRoute("ControllerProducto", "getAndShowHome");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 


?>


