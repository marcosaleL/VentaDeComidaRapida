<?php

require_once "./libs/smarty/Smarty.class.php";

class ViewAdmin{

    private $title;
    
    function __construct(){
        $this->title = "Pagina del administrador";
    }

    function ShowAdministratorPage($productos, $categorias,$logged,$role){
            $index = 0;
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            $smarty->assign('logged',$logged);
            $smarty->assign('role',$role);
            $smarty->assign('productos', $productos);
            $smarty->assign('categorias', $categorias);
            $smarty->assign('index', $index);
            $smarty->display('../templates/adminPage.tpl'); // muestro el template
    }
}
?>