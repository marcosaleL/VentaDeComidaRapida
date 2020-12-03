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
        $sentencia = $this->db->prepare("SELECT * FROM Categoria WHERE id_categoria = ?");
        $sentencia->execute(array($id));
        $categoria = $sentencia->fetch(PDO::FETCH_OBJ);
        return $categoria;
    }

    //Funcion para obtener el id de uan categoria dando sun nombre 
    function getCategoriaByName($nombre){
        $sentencia = $this->db->prepare("SELECT id_categoria FROM Categoria WHERE nombre = ?");
        $sentencia->execute(array($nombre));
        $categoria = $sentencia->fetch(PDO::FETCH_OBJ);
        return $categoria;
    }


    //Funcion para insertar a la tabla una categoria
    function insertarCategoria($nombre,$descripcion){
        $sentencia = $this->db->prepare("INSERT INTO `Categoria`(`nombre`, `descripcion`) VALUES (?,?)");
        $sentencia->execute(array($nombre,$descripcion));
        header("Location: ".BASE_URL."administracion");
    }

    //Funcion para eliminar un categoria
    function deleteCategoria($name){
        $sentencia = $this->db->prepare("DELETE FROM Categoria WHERE nombre = ?");
        $sentencia->execute(array($name));
        header("Location: ".BASE_URL."administracion");
    }


    //COMPROBAR QUE ESTE LOGGED
    function deleteCategoriabyID($id){
        $sentencia = $this->db->prepare("DELETE FROM Categoria WHERE id_categoria = ?");
        $sentencia->execute(array($id));
        header("Location: ".BASE_URL."home");
    }


    //Funcion para update categoria
    function updateCategoria($nombre, $descripcion, $actualName){
        $sentencia = $this->db->prepare("UPDATE Categoria SET nombre= ?, descripcion= ? WHERE nombre = ? ");
        $sentencia->execute(array($nombre, $descripcion, $actualName));
        header("Location: ".BASE_URL."administracion");
    }


}
    
?>