<?php

require_once "./libs/smarty/Smarty.class.php";

class ViewProductos{

    private $title;
    
    function __construct(){
        $this->title = "Lista de productos";
    }

    function ShowHome($productos = null){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('productos', $productos);
        $smarty->display('templates/productos.tpl'); // muestro el template 
    }

    this->ShowHome();
   // function ShowHomeLocation(){
   //     header("Location: ".BASE_URL."home");
   // } 
}

?>
