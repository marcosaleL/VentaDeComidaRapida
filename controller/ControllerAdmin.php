<?php

    require_once "../model/ModelProducto.php";
    require_once "../model/ModelCategoria.php";
    require_once "../view/ViewAdmin.php";

    class ControllerAdmin{

        private $modelProd;
        private $modelCat;
        private $viewAdmin;

        function __construct(){
            $this->modelProd = new ModelProductos();
            $this->modelCat = new ModelCategoria();
            $this->viewAdmin = new ViewAdmin();
        }
        //Funcion que obtiene desde el Model los Productos y se los manda al view para mostrarlos
        function GetAndShowAdministratorPage(){
            $productos = $this->modelProd->getProductos();
            $categorias = $this->modelCat->getCategorias();  
            $this->viewAdmin->ShowAdministratorPage($productos, $categorias);
        }   
    }

    $as = new ControllerAdmin();
    $as -> GetAndShowAdministratorPage();
?>