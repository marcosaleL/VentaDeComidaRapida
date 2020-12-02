<?php

    require_once "./model/ModelProducto.php";
    require_once "./view/ViewProducto.php";
    require_once "./Helper.php";

    class ControllerProducto{

        private $modelProd;
        private $viewProd;
        private $helper;

        function __construct(){
            
            $this->modelProd = new ModelProductos();
            $this->viewProd = new ViewProductos();
            $this->helper = new Helper();
        }
        //Funcion que obtiene desde el Model los Productos y se los manda al view para mostrarlos
        function getAndShowHome(){
            $productos = $this->modelProd->getProductosWithCategory();
            $logged = $this->helper->checkLoggedIn();   
            $this->viewProd->showHome($productos,$logged);
        }  

        function getAndShowListadoProductos(){    
            $productos = $this->modelProd->getProductos();
            $logged = $this->helper->checkLoggedIn();      
            $this->viewProd->showListadoProductos($productos,$logged);
        } 

        function removeProduct($params = null){
            $id = $params[':ID'];
            $this->modelProd->deleteProducto($id);
        }

        function getAndShowProducto($params = null){
            $id = $params[':ID'];
            $producto = $this->modelProd->getProducto($id);
            $logged = $this->helper->checkLoggedIn();
            if ($producto != null)
                $this->viewProd->showProducto($producto,$logged);
            else 
                $this->viewProd->showNoExiste($id,$logged);
        }

    }


?>