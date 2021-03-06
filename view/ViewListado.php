<?php

require_once "./libs/smarty/Smarty.class.php";

class ViewListado{

    private $title;
    
    function __construct(){
        $this->title = "Nuestro Productos";
    }

    function showList($categorias,$logged,$role){
        //if ($productos != null && $categoria != null){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            $smarty->assign('logged',$logged);
            $smarty->assign('role',$role);
            $smarty->assign('categorias', $categorias);
            $smarty->display('./templates/categorias.tpl'); // muestro el template
        //}
    }

    function showCategoria($categoria,$logged,$role){
        $smarty = new Smarty();
        $smarty->assign('titulo', "Detalles de la categoria");
        $smarty->assign('logged',$logged);
        $smarty->assign('role',$role);
        $smarty->assign('categoria', $categoria);
        $smarty->display('./templates/detalleCat.tpl');       
    }

    function showNoExiste($id,$logged,$role){
        $smarty = new Smarty();
        $smarty->assign('titulo', "La categoria no existe");
        $smarty->assign('logged',$logged);
        $smarty->assign('role',$role);
        $smarty->assign('nombre', "categoria");
        $smarty->assign('id', $id);
        $smarty->display('./templates/noExiste.tpl'); 
    }
    
    
   // function ShowHomeLocation(){
   //     header("Location: ".BASE_URL."home");
   // } 
}

?>
