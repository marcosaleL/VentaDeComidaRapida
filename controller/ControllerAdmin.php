<?php

    require_once "./model/ModelProducto.php";
    require_once "./model/ModelUser.php";
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
        private $modelUser;

        function __construct(){
            $this->modelProd = new ModelProductos();
            $this->modelCat = new ModelCategoria();
            $this->modelUser = new ModelUser();
            $this->viewAdmin = new ViewAdmin();
            $this->viewUser = new ViewUser();
            $this->helper = new Helper();
        }
        
        //Funcion que obtiene desde el Model los Productos y se los manda al view para mostrarlos
        function GetAndShowAdministratorPage(){
            $logged = $this->helper->checkLoggedIn();
            $role = 0;
            if ($logged){
                $usuarioDB = $this->modelUser->getUser($_SESSION["DIRECCION"]);
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION["DIRECCION"] = $usuarioDB->direccion;
                $_SESSION['LAST_ACTIVITY'] = time(); 
                $role = $usuarioDB->admin;
                if($admin == 1){
                    $productos = $this->modelProd->getProductos();
                    $categorias = $this->modelCat->getCategorias(); 
                    $this->viewAdmin->ShowAdministratorPage($productos, $categorias,$logged,$role);
                }else{
                    header("Location: ".BASE_URL."home");
                } 
            }else{
                $this->viewUser->showLogin("",$logged,$role);
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

        public function addProduct() {
            if ($_FILES['imagen']['name']) {
                if ($_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/png") {
                    $id = $this->modelCat->getCategoriaByName($_POST['categoryAddProduct']);
                    $this->modelProd->insertarProducto($_POST['nameAddProduct'],$_POST['descriptionAddProduct'],$_POST['precioAddProduct'], $id->id_categoria ,$_FILES['imagen']);
                }
            }
            else {
                $id = $this->modelCat->getCategoriaByName($_POST['categoryAddProduct']);
                $this->modelProd->insertarProducto($_POST['nameAddProduct'],$_POST['descriptionAddProduct'],$_POST['precioAddProduct'], $id->id_categoria ,$_FILES['imagen']);  
            }
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