<?php

require_once "./libs/smarty/Smarty.class.php";

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
            $smarty->display('./templates/home.tpl'); // muestro el template
        }
    }


    function showListadoProductos($productos){
        if ($productos != null){
            $smarty = new Smarty();
            $index = 0;
            $smarty->assign('titulo', $this->title);
            $smarty->assign('productos', $productos);
            $smarty->assign('index', $index);
            $smarty->display('./templates/productos.tpl'); // muestro el template
        }
    }


    function showProducto($producto){
        $smarty = new Smarty();
        $smarty->assign('titulo', "ElAle");
        $smarty->assign('producto', $producto);
        $smarty->display('./templates/detalleProd.tpl'); // muestro el template
    }



    
   // function ShowHomeLocation(){
   //     header("Location: ".BASE_URL."home");
   // } 
}

?>
