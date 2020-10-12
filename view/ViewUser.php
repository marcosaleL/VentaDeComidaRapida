<?php

require_once "./libs/smarty/Smarty.class.php";

class ViewUser{

    private $title;

    function __construct(){
        $this->title = "Login";
    }

    function showLogin($message = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('message', $message);
        $smarty->display('templates/login.tpl'); // muestro el template 
    }
}


?>