<?php

require_once "../libs/smarty/Smarty.class.php";

class ViewProductos{

    private $title;
    
    function __construct(){
        $this->title = "Nuestros productos";
    }

    function ShowHome($productos = null){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            $smarty->assign('productos', $productos);
<<<<<<< HEAD
            $smarty->assign('currentCategory', "");
            $smarty->display('../templates/producto.tpl'); // muestro el template
=======
            echo "Estoy en view padreeee";
            $smarty->display('../templates/productos.tpl'); // muestro el template
>>>>>>> origin/DevBrian
    }
   // function ShowHomeLocation(){
   //     header("Location: ".BASE_URL."home");
   // } 
}

?>
