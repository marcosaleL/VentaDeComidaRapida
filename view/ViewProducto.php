<?php

require_once "./libs/smarty/Smarty.class.php";

class ViewProductos{

    private $title;
    
    function __construct(){
        $this->title = "Lista de productos";
    }

    function ShowHome($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('productos_s', $productos);
        $smarty->display('templates/productos.tpl'); // muestro el template 
    }


   // function ShowHomeLocation(){
   //     header("Location: ".BASE_URL."home");
   // } 
}

?>
