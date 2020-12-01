<?php
require_once './model/ModelComment.php';
include_once './api/ViewApi.php';
require_once 'ApiController.php';
require_once "./Helper.php";

class ControllerApiComments extends ApiController {

    private $helper;
  
    /*
    function __construct() {
        parent::__construct();
        $this->model = new ModelComment();
        $this->view = new ViewApi();
    }
*/

    public function getComments($params = null){
        $id_producto = $params[':ID'];
        $comments = $this->model->getCommentsbyId($id_producto);
        $this->view->response($comments, 200);
        /*
        if ($comments != null) {
            $this->view->response($comments, 200);
        } else {
            $this->view->response('No se han encontrado comentarios para ese producto.', 404);
        }
        */
    }





    function deleteComment($params = null){
        $id_comment = $params[':ID'];
        $result = $this->model->deleteComment($id_comment);
        if ($result > 0) {
            $this->view->response('El comentario ha sido eliminado correctamente.', 202);
        } else {
            $this->view->response('No se ha podido eliminar ese comentario', 404);
        }
    }

    function addComment(){
            $data = $this->getData();
            if(!empty($data->texto)){
                $valoracion = $data->valoracion;
                $texto = $data->texto;
                $id_producto = $data->id_producto;
                $helper = new Helper();
                $helper->checkLoggedIn();
                $id_usuario = $_SESSION['DIRECCION'];
                $added= $this->model->addComment($valoracion,$texto,$id_producto,$id_usuario);
                if ($added) {
                    $this->view->response("Se ha agregado un nuevo comentario correctamente.", 201);
                } else {
                    $this->view->response("No se ha podido realizar dicha acción", 404);
                }
            }else{
                $this->view->response("No se que iria acá", 409); 
            }
    }


}

