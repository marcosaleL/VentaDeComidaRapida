<?php

require_once "./libs/smarty/Smarty.class.php";
require_once "./Helper.php";

class ViewUser{

    private $title;

    function __construct(){
        $this->title = "Login";
    }

    function showLogin($message = "",$logged,$admin){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('logged',$logged);
        $smarty->assign('admin',$admin);
        $smarty->assign('message', $message);
        $smarty->display('./templates/login.tpl'); // muestro el template 
    }

    function showRegistro($logged){
        $smarty = new Smarty();
        $smarty->assign('logged',$logged);
        $smarty->assign('titulo', "Registrarse");
        $smarty->display('./templates/registro.tpl'); 
    }

}


?>