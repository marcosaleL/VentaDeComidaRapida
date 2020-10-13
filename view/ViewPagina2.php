<?php

require_once "../libs/smarty/Smarty.class.php";

class ViewPagina2{

    private $title;
    
    function __construct(){
        $this->title = "Nuestro Productos";
    }

    function showPag2($productos, $categorias){
        //if ($productos != null && $categoria != null){
            $index = 0;
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            $smarty->assign('productos', $productos);
            $smarty->assign('categorias', $categorias);
            $smarty->assign('index', $index);
            $smarty->display('../templates/pagina2.tpl'); // muestro el template
        //}
    }
   // function ShowHomeLocation(){
   //     header("Location: ".BASE_URL."home");
   // } 
}

?>
