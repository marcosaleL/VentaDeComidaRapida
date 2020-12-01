<?php
class ViewApi{

    public function response($data, $status){
        header("Content-Type: application/json");
        header("HTTP/1.1 {$status} " . $this->requestStatus($status));
        echo json_encode($data);
    }

    private function requestStatus($code){
        $status = array(
            200 => "OK",
            201 => "Created",
            202 => "Accepted",
            400 => "Bad Request",
            401 => "Unauthorized",
            404 => "Not Found",
            405 => "Method Not Allowed",
            409 => "Conflict", 
            500 => "Internal Server Error"
        );
        return (isset($status[$code])) ? $status[$code] : $status[500];
    }


    public function getData(){
        return json_decode($this->data);
    }



}