<?php

require_once "./libs/smarty/Smarty.class.php";

class ViewProductos{

    private $title;
    
    function __construct(){
        $this->title = "Nuestros productos";
    }

    function showHome($productos,$logged){
        if ($productos != null){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            $smarty->assign('logged',$logged);
            $smarty->assign('productos', $productos);
            $smarty->assign('currentCategory', "");
            $smarty->display('./templates/home.tpl'); // muestro el template
        }
    }

    function showListadoProductos($productos,$logged){
        if ($productos != null){
            $smarty = new Smarty();
            $index = 0;
            $smarty->assign('titulo', $this->title);
            $smarty->assign('logged',$logged);
            $smarty->assign('productos', $productos);
            $smarty->assign('index', $index);
            $smarty->display('./templates/productos.tpl'); // muestro el template
        }
    }

    function showProducto($producto,$logged){
        $smarty = new Smarty();
        $smarty->assign('titulo', "Detalles del producto");
        $smarty->assign('logged',$logged);
        $smarty->assign('producto', $producto);
        $smarty->display('./templates/detalleProd.tpl');
    }
    
    function showNoExiste($id,$logged){
        $smarty = new Smarty();
        $smarty->assign('titulo', "El producto no existe");
        $smarty->assign('logged',$logged);
        $smarty->assign('nombre', "producto");
        $smarty->assign('id', $id);
        $smarty->display('./templates/noExiste.tpl'); 
    }

   // function ShowHomeLocation(){
   //     header("Location: ".BASE_URL."home");
   // } 
}

?>
