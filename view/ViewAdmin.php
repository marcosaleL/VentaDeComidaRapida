<?php

require_once "./libs/smarty/Smarty.class.php";

class ViewAdmin{

    private $title;
    
    function __construct(){
        $this->title = "Pagina del administrador";
    }

    function ShowAdministratorPage($productos, $categorias){
            $index = 0;
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            $smarty->assign('productos', $productos);
            $smarty->assign('categorias', $categorias);
            $smarty->assign('index', $index);
            $smarty->display('../templates/adminPage.tpl'); // muestro el template
    }
}
?>