<?php

class ModelCategoria{
    
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=VentaComidaRapida;charset=utf8', 'root', '');
    }

    //Funcion para obtener un arreglo de categorias
    function getCategorias(){
        $sentencia = $this->db->prepare("SELECT * FROM Categoria");
        $sentencia->execute();
        $categoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }
    
    //Funcion para obtener un categoria con ID
    function getCategoria($id){
        $sentencia = $this->db->prepare("SELECT * FROM Categoria WHERE categoria = ?");
        $sentencia->execute(array($id));
        $categoria = $sentencia->fetch(PDO::FETCH_OBJ);
        return $categoria;
    }


    //Funcion para insertar a la tabla una categoria
    function insertarCategoria($nombre,$descripcion){
        $sentencia = $this->db->prepare("INSERT INTO `Categoria`(`nombre`, `descripcion`) VALUES ('$nombre','$descripcion')");
        $sentencia->execute();
        
    }

    //Funcion para eliminar un categoria
    function deleteCategoria($name){
        $sentencia = $this->db->prepare("DELETE FROM Categoria WHERE nombre = ?");
        $sentencia->execute(array($name));
    }

    //Funcion para update categoria
    function updateCategoria($nombre, $descripcion, $actualName){
        $sentencia = $this->db->prepare("UPDATE Categoria SET nombre= '$nombre', descripcion= '$descripcion' WHERE nombre = '$actualName' ");
        $sentencia->execute();
    }

    
}
    
?>