<?php

require_once "../libs/smarty/Smarty.class.php";

class ViewProductos{

    private $title;
    
    function __construct(){
        $this->title = "Nuestros productos";
    }

    function showHome($productos){
        if ($productos != null){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            $smarty->assign('productos', $productos);
            $smarty->assign('currentCategory', "");
            $smarty->display('../templates/producto.tpl'); // muestro el template
        }
    }
   // function ShowHomeLocation(){
   //     header("Location: ".BASE_URL."home");
   // } 
}

?>
