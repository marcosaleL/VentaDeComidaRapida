<?php

class ModelUser{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=VentaComidaRapida;charset=utf8', 'root', '');
    }
     
    function getUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE direccion=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
      
}


?>