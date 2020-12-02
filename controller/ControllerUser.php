<?php

    require_once "./model/ModelUser.php";
    require_once "./view/ViewUser.php";
    require_once "./Helper.php";

    class ControllerUser{

        private $modelUser;
        private $viewUser;
        private $helper;

        function __construct(){
            $this->modelUser = new ModelUser();
            $this->viewUser = new ViewUser();
            $this->helper = new Helper();
        }

        function rol($logged){
            if ($logged){
                $usuarioDB = $this->modelUser->getUser($_SESSION["DIRECCION"]);
                $_SESSION["DIRECCION"] = $usuarioDB->direccion;
                $_SESSION['LAST_ACTIVITY'] = time(); 
                return $usuarioDB->admin;
            }else{ 
                return 0;
            } 
        }

        function login(){
            $logged = $this->helper->checkLoggedIn();
            $role = rol($logged);
            $this->viewUser->showLogin("",$logged,$role);
        }
    
        function registro(){
            $logged = $this->helper->checkLoggedIn();
            $role = rol($logged);
            $this->viewUser->showRegistro($logged,$role);
        }

        function logout(){
            if(!isset($_SESSION)){
                session_start();
            }
            session_destroy();
            header("Location: ". login);
        }

        function verifyUser(){
            $user = $_POST["input_user"];
            $pass = $_POST["input_pass"];
            if(isset($user)){
                $usuarioDB = $this->modelUser->getUser($user);
                $logged = $this->helper->checkLoggedIn();
                $role = 0;
                if ($logged){
                    $usuarioDB = $this->modelUser->getUser($_SESSION["DIRECCION"]);
                    $_SESSION["DIRECCION"] = $usuarioDB->direccion;
                    $_SESSION['LAST_ACTIVITY'] = time(); 
                    $role = $usuarioDB->admin;
                }  
                if(isset($usuarioDB) && $usuarioDB){
                    if (password_verify($pass, $usuarioDB->password)){
                        session_start();
                        $_SESSION["DIRECCION"] = $usuarioDB->direccion;
                        $_SESSION['LAST_ACTIVITY'] = time();
                        header("Location: ".BASE_URL."administracion");
                    }else{
                        $this->viewUser->showLogin("Contraseña incorrecta",$logged,$role);
                    }
                }else{
                    $this->viewUser->showLogin("El usuario no existe",$logged,$role);
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