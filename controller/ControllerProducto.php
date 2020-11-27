<?php

    require_once "./model/ModelProducto.php";
    require_once "./view/ViewProducto.php";

    class ControllerProducto{

        private $modelProd;
        private $viewProd;

        function __construct(){
            $this->modelProd = new ModelProductos();
            $this->viewProd = new ViewProductos();
        }
        //Funcion que obtiene desde el Model los Productos y se los manda al view para mostrarlos
        function getAndShowHome(){
            $productos = $this->modelProd->getProductosWithCategory();   
            $this->viewProd->showHome($productos);
        }  

        function getAndShowListadoProductos(){    
                $productos = $this->modelProd->getProductos();   
                $this->viewProd->showListadoProductos($productos);
        } 


        function getAndShowProducto($params = null){
            $id = $params[':ID'];
            $producto = $this->modelProd->getProducto($id);
            if ($producto != null)
                $this->viewProd->showProducto($producto);
            else 
                echo "no esiste prod";
        }

    }


?>