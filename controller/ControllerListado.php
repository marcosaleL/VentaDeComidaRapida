<?php

    require_once "./view/ViewListado.php";
    require_once "./model/ModelCategoria.php";
    require_once "./model/ModelProducto.php";
    require_once "./model/ModelUser.php";
    require_once "./Helper.php";
    

    class ControllerListado{

        private $modelCat;
        private $viewList;
        private $helper;
        private $modelUser;

        function __construct(){
            $this->modelCat = new ModelCategoria();
            $this->viewList = new ViewListado();
            $this->helper = new Helper();
            $this->modelUser = new ModelUser();
        }

        //Funcion que obtiene desde el Model los Productos y se los manda al view para mostrarlos
        function getAndShowListadoCategorias(){
            $categorias = $this->modelCat->getCategorias();
            $logged = $this->helper->checkLoggedIn();
            $role = 0;
            if ($logged){
                $usuarioDB = $this->modelUser->getUser($_SESSION["DIRECCION"]);
                $_SESSION["DIRECCION"] = $usuarioDB->direccion;
                $_SESSION['LAST_ACTIVITY'] = time(); 
                $role = $usuarioDB->admin;
            }  
            $this->viewList->showList($categorias,$logged,$role);
        } 

        function getAndShowCategoria($params = null){
            $id = $params[':ID'];
            $categoria = $this->modelCat->getCategoria($id); 
            $logged = $this->helper->checkLoggedIn();
            $role = 0;
            if ($logged){
                $usuarioDB = $this->modelUser->getUser($_SESSION["DIRECCION"]);
                $_SESSION["DIRECCION"] = $usuarioDB->direccion;
                $_SESSION['LAST_ACTIVITY'] = time(); 
                $role = $usuarioDB->admin;
            }  
            if ($categoria != null)
                $this->viewList->showCategoria($categoria,$logged,$role);
            else
                $this->viewList->showNoExiste($id,$logged,$role);        
        } 

        function removeCategory($params = null){
            $id = $params[':ID'];
            $this->modelCat->deleteCategoriabyID($id);
        }

    }    
  
?>