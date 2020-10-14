<?php

    require_once "./view/ViewPagina2.php";
    require_once "./model/ModelCategoria.php";
    require_once "./model/ModelProducto.php";

    class ControllerPagina2{

        private $modelCat;
        private $modelProd;
        private $viewPag2;
       

        function __construct(){
            $this->modelProd = new ModelProductos();
            $this->modelCat = new ModelCategoria();
            $this->viewPag2 = new ViewPagina2();
        }
        //Funcion que obtiene desde el Model los Productos y se los manda al view para mostrarlos
        function getAndShowPag2(){
            $productos = $this->modelProd->getProductos();
            $categorias = $this->modelCat->getCategorias(); 
            $this->viewPag2->showPag2($productos, $categorias);
        }   
    }
    
  
?>