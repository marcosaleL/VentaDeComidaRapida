<?php

require_once "../libs/smarty/Smarty.class.php";

class ViewProductos{

    private $title;
    
    function __construct(){
        $this->title = "Lista de productos";
    }

    function ShowHome($productos = null){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            $smarty->assign('productos', $productos);
            echo "Estoy en view padreeee";
            $smarty->display('../templates/productos.tpl'); // muestro el template
    }
   // function ShowHomeLocation(){
   //     header("Location: ".BASE_URL."home");
   // } 
}

?>
