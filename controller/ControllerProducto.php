<?php
    require_once ("./model/ModelProducto");
    require_once ("./model/ViewProducto");

    //Consulta que me interesa hacer
    //SELECT Producto.*, Categoria.nombre 
    //FROM Producto INNER JOIN Categoria 
    //WHERE Producto.id_categoria = Categoria.id_categoria

    class ControllerProducto(){

        private $modelProd;
        private $viewProd;

        function __constructor(){
            $this-> modelProd new ModelProducto ();
            $this -> viewProd new ViewProducto();
        }


        //Funcion que obtiene desde el Model los Productos y se los manda al view para mostrarlos
        function getAndShowHome(){
            $productos = $this -> modelProd -> getProductosWithCategory();
            $this -> viewProd -> showHome($productos);
        }   

?>