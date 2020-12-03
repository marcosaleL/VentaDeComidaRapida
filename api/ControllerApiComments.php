<?php
require_once './model/ModelComment.php';
require_once './model/ModelUser.php';
require_once './api/ViewApi.php';
require_once 'ApiController.php';
require_once "./Helper.php";

class ControllerApiComments extends ApiController {

    private $helper;

    public function __construct() {
        parent::__construct();
        $this->helper = new Helper();
        $this->userMod = new ModelUser();
    }

  
    public function getComments($params = null){
        $id_producto = $params[':ID'];
        $comments = $this->model->getCommentsbyId($id_producto);
        if ($comments != null) {
            $this->view->response($comments, 200);
        } else {
            $this->view->response('No se han encontrado comentarios para este producto.', 404);
        }
    }

    function deleteComment($params = null){
        $id_comment = $params[':ID'];
        $logged = $this->helper->checkLoggedIn();
        $role = 0;
        if ($logged){
            $usuarioDB = $this->userMod->getUser($_SESSION["DIRECCION"]);
            $_SESSION["DIRECCION"] = $usuarioDB->direccion;
            $_SESSION['LAST_ACTIVITY'] = time(); 
            $role = $usuarioDB->admin;
            if($role==1){
                $result = $this->model->deleteComment($id_comment);
                if ($result > 0) {
                   $this->view->response('El comentario ha sido eliminado correctamente.', 202);
                } else {
                   $this->view->response('No se ha podido eliminar ese comentario', 404);
                }
            }else{
                $this->view->response('No tiene los permisos necesarios para realizar esta accion', 202);
            }
        }else
            $this->view->response('Debe estar loggeado para efectuar esta accion', 202); 
    }

    function addComment(){
            $data = $this->getData();
            if(!empty($data->texto)){
                $valoracion = $data->valoracion;
                $texto = $data->texto;
                $id_producto = $data->id_producto;
                if($this->helper->checkLoggedIn()){
                    $usuario = $this->userMod->getUser($_SESSION["DIRECCION"]);
                    $user = $usuario->id_usuario;
                    $added= $this->model->addComment($valoracion,$texto,$id_producto,$user);  
                    $this->view->response("Se ha agregado un nuevo comentario correctamente.", 201);
                }else{
                    $this->view->response("Error de carga de datos", 409); 
                }
            }       
    }

}

