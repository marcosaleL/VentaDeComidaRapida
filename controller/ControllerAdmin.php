<?php

    require_once "./model/ModelProducto.php";
    require_once "./model/ModelCategoria.php";
    require_once "./view/ViewAdmin.php";
    require_once "./view/ViewUser.php";
    require_once "./Helper.php";

    class ControllerAdmin{

        private $modelProd;
        private $modelCat;
        private $viewAdmin;
        private $helper;
        private $viewUser;
        private $logged = false;

        function __construct(){
            $this->modelProd = new ModelProductos();
            $this->modelCat = new ModelCategoria();
            $this->viewAdmin = new ViewAdmin();
            $this->viewUser = new ViewUser();
            $this->helper = new Helper();
        }
        //Funcion que obtiene desde el Model los Productos y se los manda al view para mostrarlos
        function GetAndShowAdministratorPage(){
            $logged = $this->helper->checkLoggedIn();
            if ($logged){
                $productos = $this->modelProd->getProductos();
                $categorias = $this->modelCat->getCategorias();  
                $this->viewAdmin->ShowAdministratorPage($productos, $categorias); 
            }else{
                $this->viewUser->showLogin("");
            }
        }   

        function addCategory(){
            $this->modelCat->insertarCategoria($_POST['nameAddCategory'],$_POST['descriptionAddCategory']);
        }

        function updateCategory(){
            $this->modelCat->updateCategoria($_GET['nameUpdateCategory'],$_GET['descriptionUpdateCategory'],$_GET['nameActualCategory']);
        }

        function removeCategory(){
            $this->modelCat->deleteCategoria($_GET['nameRemoveCategory']);
        }

        //Fijarse que ande bien lo de la imagen
        function addProduct(){
            $this->modelProd->insertarProducto($_POST['nameAddProduct'],$_POST['descriptionAddProduct'],$_POST['precioAddProduct'],$_POST['categoryAddProduct'],$_POST['imageAddProduct']);
        }

        //Fijarse que ande bien lo de la imagen
        function updateProduct(){
            $this->modelProd->updateProducto($_POST['nameUpdateProduct'], $_POST['descriptionUpdateProduct'],$_POST['priceUpdateProduct'], $_POST['categoryUpdateProduct'],$_POST['imageUpdateProduct'], $_POST['nameActualProduct']);
        }

        function removeProduct(){
            $this->modelProd->deleteProducto($_GET['nameRemoveProduct']);
        }
    }

?>