<?php

    require_once "./model/ModelProducto.php";
    require_once "./model/ModelUser.php";
    require_once "./view/ViewProducto.php";
    require_once "./Helper.php";

    class ControllerProducto{

        private $modelProd;
        private $viewProd;
        private $helper;
        private $modelUser;

        function __construct(){
            
            $this->modelProd = new ModelProductos();
            $this->viewProd = new ViewProductos();
            $this->helper = new Helper();
            $this->modelUser = new ModelUser();
        }

        //Funcion que obtiene desde el Model los Productos y se los manda al view para mostrarlos
        function getAndShowHome(){
            $productos = $this->modelProd->getProductosWithCategory();
            $logged = $this->helper->checkLoggedIn();
            $role = 0;
            if ($logged){
                $usuarioDB = $this->modelUser->getUser($_SESSION["DIRECCION"]);
                $_SESSION["DIRECCION"] = $usuarioDB->direccion;
                $_SESSION['LAST_ACTIVITY'] = time(); 
                $role = $usuarioDB->admin;
            }       
            $this->viewProd->showHome($productos,$logged,$role);
        }  

        function getAndShowListadoProductos(){    
            $productos = $this->modelProd->getProductos();
            $logged = $this->helper->checkLoggedIn();
            $role = 0;
            if ($logged){
                $usuarioDB = $this->modelUser->getUser($_SESSION["DIRECCION"]);
                $_SESSION["DIRECCION"] = $usuarioDB->direccion;
                $_SESSION['LAST_ACTIVITY'] = time(); 
                $role = $usuarioDB->admin;
            }      
            $this->viewProd->showListadoProductos($productos,$logged,$role);
        } 

        function removeProduct($params = null){
            $id = $params[':ID'];
            $this->modelProd->deleteProducto($id);
        }

        function getAndShowProducto($params = null){
            $id = $params[':ID'];
            $producto = $this->modelProd->getProducto($id);
            $logged = $this->helper->checkLoggedIn();
            $role = 0;
            if ($logged){
                $usuarioDB = $this->modelUser->getUser($_SESSION["DIRECCION"]);
                $_SESSION["DIRECCION"] = $usuarioDB->direccion;
                $_SESSION['LAST_ACTIVITY'] = time(); 
                $role = $usuarioDB->admin;
            }        
            if ($producto != null)
                $this->viewProd->showProducto($producto,$logged,$role);
            else 
                $this->viewProd->showNoExiste($id,$logged,$role);
        }

    }


?>