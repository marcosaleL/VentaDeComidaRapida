<?php

    require_once "./view/ViewListado.php";
    require_once "./model/ModelCategoria.php";
    require_once "./model/ModelProducto.php";

    class ControllerListado{

        private $modelCat;
        private $viewList;
       

        function __construct(){
            $this->modelCat = new ModelCategoria();
            $this->viewList = new ViewListado();
        }
        //Funcion que obtiene desde el Model los Productos y se los manda al view para mostrarlos
        function getAndShowListadoCategorias(){
            $categorias = $this->modelCat->getCategorias(); 
            $this->viewList->showList($categorias);
        }   
    }
    
  
?>