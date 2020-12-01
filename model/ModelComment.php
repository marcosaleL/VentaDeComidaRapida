<?php
class ModelComment{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=VentaComidaRapida;charset=utf8', 'root', '');
    }
	

    function getCommentsbyId($id){
        $sentencia = $this->db->prepare("SELECT Comentario.*, Usuario.nombre FROM Comentario INNER JOIN Usuario on Comentario.id_usuario = Usuario.id_usuario WHERE Comentario.id_producto=?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    function deleteComment($id)
    {
        $sentencia = $this->db->prepare('DELETE FROM Comentario WHERE id_comentario =?');
        $sentencia->execute(array($id));
        return $sentencia->rowCount();
    }

    function addComment($valoracion,$texto,$id_producto,$id_usuario)
    {
        $sentencia = $this->db->prepare('INSERT INTO Comentario (valoracion,texto,id_producto,id_usuario) VALUES(?,?,?,?)');
        $sentencia->execute(array($valoracion,$texto,$id_producto,$id_usuario));
        return $this->db->lastInsertId();
    }
}
