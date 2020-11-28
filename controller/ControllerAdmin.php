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
            //ESTO NO LO ESTA HACIENDO BIEN (ES LO UNICO QUE FALTA DE IMAGEN)
            $destino = null;
            if(isset($_FILES['img'])){
                $uploads = getcwd() . "/uploads/";
                $destino = tempnam($uploads, $_FILES['img']['name']);
                move_uploaded_file($_FILES['img']['tmp_name'],$destino);
                $destino = basename($destino);
            }
            $id = $this->modelCat->getCategoriaByName($_POST['categoryAddProduct']);
            $this->modelProd->insertarProducto($_POST['nameAddProduct'],$_POST['descriptionAddProduct'],$_POST['precioAddProduct'], $id->id_categoria ,$destino);
            
        }

        //Fijarse que ande bien lo de la imagen
        function updateProduct(){
            $id = $this->modelCat->getCategoriaByName($_GET['categoryUpdateProduct']);
            $this->modelProd->updateProducto($_GET['nameUpdateProduct'], $_GET['descriptionUpdateProduct'],$_GET['priceUpdateProduct'], $id->id_categoria ,$_GET['imageUpdateProduct'], $_GET['nameActualProduct']);
        }

        function removeProduct(){
            $this->modelProd->deleteProducto($_GET['nameRemoveProduct']);
        }
    }

?>