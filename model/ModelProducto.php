<?php

//class ModelProducto{
    
    /*
    private $db;
    function __constructor(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=test;charset=utf8', 'root', '');
    }
    */
    
    //Funcion para obtener un arreglo de productos
    function getProductos(){
        $sentencia = $this->db->prepare("SELECT * FROM Producto");
        $sentencia->execute();
        $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $producto;
    }
    
    //Funcion para obtener un producto con ID
    function getProducto($id){
        $sentencia = $this->db->prepare("SELECT * FROM Producto WHERE id_producto = ?");
        $sentencia->execute(array($id));
        $producto = $sentencia->fetch(PDO::FETCH_OBJ);
        return $producto;
    }

    //Funcion para insertar a la tabla
    function insertarProducto($nombre,$descripcion,$precio,$id_categoria){
        $db = new PDO('mysql:host=localhost;'.'dbname=test;charset=utf8', 'root', '');
        $sentencia = $db->prepare("INSERT INTO Producto(nombre,descripcion,precio,id_categoria) VALUES (" . "\"" . $nombre . "\",\"". $descripcion . "\"," . $precio . "," . $id_categoria . ")");
        $sentencia->execute();
    }

    //Funcion para eliminar un producto
    function deleteProducto($id){
        $sentencia = $this->db->prepare("DELETE FROM Producto WHERE id_producto = ?");
        $sentencia->execute(array($id));
    }

    //Funcion para update producto
    function updateProducto($nombre, $descripcion, $precio, $id_categoria, $id_producto){
        $sentencia = $this->db->prepare("UPDATE Producto SET nombre=" . "\"" . $nombre . "\", descripcion=" . "\"" . $descripcion . "\", precio=" . "\"" . $precio . "\", id_categoria=" . "\"" . $id_categoria . "\"" . "WHERE id_producto = $id_producto");
        $sentencia->execute();
    }

//}
    
?>