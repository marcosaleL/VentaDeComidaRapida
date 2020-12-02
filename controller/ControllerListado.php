<?php

    require_once "./view/ViewListado.php";
    require_once "./model/ModelCategoria.php";
    require_once "./model/ModelProducto.php";
    require_once "./Helper.php";
    

    class ControllerListado{

        private $modelCat;
        private $viewList;
        private $helper;

        function __construct(){
            $this->modelCat = new ModelCategoria();
            $this->viewList = new ViewListado();
            $this->helper = new Helper();
        }
        //Funcion que obtiene desde el Model los Productos y se los manda al view para mostrarlos
        function getAndShowListadoCategorias(){
            $categorias = $this->modelCat->getCategorias();
            $logged = $this->helper->checkLoggedIn(); 
            $this->viewList->showList($categorias,$logged);
        } 

        function getAndShowCategoria($params = null){
            $id = $params[':ID'];
            $categoria = $this->modelCat->getCategoria($id); 
            $logged = $this->helper->checkLoggedIn(); 
            if ($categoria != null)
                $this->viewList->showCategoria($categoria,$logged);
            else
                $this->viewList->showNoExiste($id,$logged);        
        } 

        function removeCategory($params = null){
            $id = $params[':ID'];
            $this->modelCat->deleteCategoriabyID($id);
        }

    }    
  
?>