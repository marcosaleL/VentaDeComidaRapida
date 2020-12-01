<?php

abstract class ApiController {
    protected $model;
    protected $view;
    private $data; 

    public function __construct() {
        $this->view = new ViewApi();
        $this->data = file_get_contents("php://input"); 
        $this->model = new ModelComment();
    }

    function getData(){ 
        return json_decode($this->data); 
    }  

}

?>

