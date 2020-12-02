<?php
    require_once 'RouterClass.php';
    require_once './api/ControllerApiComments.php';
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    // instancia el router
    $r = new Router();
    
    // arma la tabla de ruteo
    $r->addRoute('comments/:ID','GET','ControllerApiComments','getComments');
    $r->addRoute('delComment/:ID', 'DELETE','ControllerApiComments','deleteComment');
    $r->addRoute('comment','POST','ControllerApiComments','addComment');

    // rutea
    $r->route($_GET["resource"], $_SERVER["REQUEST_METHOD"]);
    