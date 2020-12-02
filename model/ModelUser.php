<?php

class ModelUser{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=VentaComidaRapida;charset=utf8', 'root', '');
    }
     
    function getUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM Usuario WHERE direccion=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function insertarUsuario($name,$lastName,$mail,$phone,$hash,$admin){
        $sentencia = $this->db->prepare("INSERT INTO `Usuario`(`nombre`, `apellido`, `direccion`, `telefono`, `password`, `admin`) VALUES (?,?,?,?,?,?)");
        $sentencia->execute(array($name,$lastName,$mail,$phone,$hash,$admin));
        header("Location: ".BASE_URL."home");
    }

    function getUsuarios(){
        $sentencia = $this->db->prepare("SELECT * FROM Usuario");
        $sentencia->execute();
        $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $usuarios;
    }
     
    function updateUser($role,$user){
<<<<<<< HEAD
        $sentencia = $this->db->prepare("UPDATE `usuario` SET admin=? WHERE nombre=?");
=======
        //die($role);
        $sentencia = $this->db->prepare('UPDATE Usuario SET admin=? WHERE nombre = ?');
>>>>>>> c722a2024643731aa3027804f6b0ca475f3d8234
        $sentencia->execute(array($role,$user));
        header("Location: ".BASE_URL."administracion");
    }
}


?>