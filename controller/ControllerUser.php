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
    
        function registro(){
            $this->viewUser->showRegistro();
        }

        function logout(){
            session_start();
            session_destroy();
            header("Location: ". login);
        }

        function verifyUser(){
            $user = $_POST["input_user"];
            $pass = $_POST["input_pass"];
            if(isset($user)){
                $usuarioDB = $this->modelUser->getUser($user);
                if(isset($usuarioDB) && $usuarioDB){
                    if (password_verify($pass, $usuarioDB->password)){
                        session_start();
                        $_SESSION["DIRECCION"] = $usuarioDB->direccion;
                        $_SESSION['LAST_ACTIVITY'] = time();
                        header("Location: ".BASE_URL."administracion");
                    }else{
                        $this->viewUser->showLogin("Contraseña incorrecta");
                    }
                }else{
                    $this->viewUser->showLogin("El usuario no existe");
                }
            }
        }
        
        function registerUser(){
            $pass = $_POST['passwordRegister'];
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $admin = 0;
            $this->modelUser->insertarUsuario($_POST['nameRegister'],$_POST['lastNameRegister'],$_POST['mailRegister'],$_POST['phoneRegister'],$hash,$admin);
            $usuarioDB = $this->modelUser->getUser($_POST['mailRegister']);
            session_start();
            $_SESSION["DIRECCION"] = $usuarioDB->direccion;
            $_SESSION['LAST_ACTIVITY'] = time();
            header("Location: ".BASE_URL."administracion");
        }


    }

    /*
    //Como se generan las contraseñas hash para cargar a la base de datos
    $contrasenia = "12346";
    $hash = password_hash($contrasenia, PASSWORD_DEFAULT);
    echo $contrasenia . " = " . $hash;
    echo '</br>';
    //Prueba de lo que ingresa el usuario
    $ingresaContraseña = "12345";
    if (password_verify($ingresaContraseña, $hash))
        echo "Es correcta";
    else
        echo "Es incorrecta";
    */
?>