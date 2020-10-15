<?php

require_once "./libs/smarty/Smarty.class.php";

class ViewListado{

    private $title;
    
    function __construct(){
        $this->title = "Nuestro Productos";
    }

    function showList($productos, $categorias){
        //if ($productos != null && $categoria != null){
            $index = 0;
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            $smarty->assign('productos', $productos);
            $smarty->assign('categorias', $categorias);
            $smarty->assign('index', $index);
            $smarty->display('./templates/listado.tpl'); // muestro el template
        //}
    }
   // function ShowHomeLocation(){
   //     header("Location: ".BASE_URL."home");
   // } 
}

?>
