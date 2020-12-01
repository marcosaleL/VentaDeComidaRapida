<?php

class ModelProductos{
    
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=VentaComidaRapida;charset=utf8', 'root', '');
    }
    
    //Funcion para obtener un arreglo de productos
    function getProductos(){
        $sentencia = $this->db->prepare("SELECT * FROM Producto");
        $sentencia->execute();
        $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $producto;
    }
    
    //Acomodar la funcion para que sepa como devolver una imagen!!
    //Funcion para obtener un producto con ID
    function getProducto($id){
        $sentencia = $this->db->prepare("SELECT * FROM Producto WHERE id_producto = ?");
        $sentencia->execute(array($id));
        $producto = $sentencia->fetch(PDO::FETCH_OBJ);
        return $producto;
    }

    function getProductosWithCategory(){
        $sentencia = $this->db->prepare("SELECT Producto.*, Categoria.nombre as nombreCategoria FROM Producto INNER JOIN Categoria on Producto.id_categoria = Categoria.id_categoria ORDER BY id_categoria ");
        $sentencia->execute();
        $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $producto;
    }

    //Acomodar la funcion para que acepte imagen!!!!!
    //Funcion para insertar a la tabla
    function insertarProducto($nombre,$descripcion,$precio,$id_categoria,$imagen){
        $filepath = null;
        if ($imagen)
            $filepath = $this->moveFile($imagen);
        $sentencia = $this->db->prepare("INSERT INTO Producto (nombre,descripcion,precio,id_categoria,imagen) VALUES (?,?,?,?,?)");
        $sentencia->execute(array($nombre,$descripcion,$precio,$id_categoria,basename($filepath)));
        header("Location: ".BASE_URL."administracion");
    }

    private function moveFile($imagen) {
        $filepath = "./uploads/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));  
        move_uploaded_file($imagen['tmp_name'], $filepath);
        return $filepath;
    }




    //Funcion para eliminar un producto
    //COMPROBAR QUE ESTE LOGGED
    function deleteProducto($id){
        $sentencia = $this->db->prepare("DELETE FROM Producto WHERE id_producto = ?");
        $sentencia->execute(array($id));
        header("Location: ".BASE_URL."home");
    }

    //Acomodar la funcion para que acepte imagen!!
    //Funcion para update producto
    function updateProducto($nombre, $descripcion, $precio, $id_categoria, $image , $actualName){
        //$sentencia = $this->db->prepare("UPDATE Producto SET nombre=" . "\"" . $nombre . "\", descripcion=" . "\"" . $descripcion . "\", precio=" . "\"" . $precio . "\", id_categoria=" . "\"" . $id_categoria . "\", imagen=" . "\"" . $img "\"" . "WHERE nombre = $actualName" . );
        $sentencia = $this->db->prepare("UPDATE Producto SET nombre= '$nombre', descripcion= '$descripcion', precio=$precio, id_categoria= $id_categoria , imagen= '$image' WHERE nombre = '$actualName' ");
        $sentencia->execute();
        header("Location: ".BASE_URL."administracion");
    }
}
    
?>