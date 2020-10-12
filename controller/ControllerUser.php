<?php

    require_once "./model/ModelUser.php";
    require_once "./view/ViewUser.php";

    class ControllerUser{

        private $modelUser;
        private $viewUser;

        function __construct(){
            $this->modelUser = new ModelUser();
            $this->viewUser = new ViewUser();
        }

        function login(){
            $this->viewUser->showLogin();
        }
    
        function logout(){
            session_start();
            session_destroy();
            header("Location: ".LOGIN);
        }
    
        function verifyUser(){
            $user = $_POST["input_user"];
            $pass = $_POST["input_pass"];
            if(isset($user)){
                $userFromDB = $this->modelUser->GetUser($user);
                if(isset($userFromDB) && $userFromDB){
                    // Existe el usuario    
                    if (password_verify($pass, $userFromDB->password)){
                        session_start();
                        $_SESSION["EMAIL"] = $userFromDB->email;
                        $_SESSION['LAST_ACTIVITY'] = time();
                        header("Location: ".BASE_URL."home");
                    }else{
                        $this->viewUser->showLogin("Contraseña incorrecta");
                    }
                }else{
                    // No existe el user en la DB
                    $this->viewUser->showLogin("El usuario no existe");
                }
            }
        }
    }

    $as = new ControllerUser();
    $as -> login();
?>