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
            //Una vez que se destruye la sesion, lo podemos llevar a la HOME, generalmente se la lleva
            //al login
            header("Location: ". login);
        }

    
        function verifyUser(){
            $user = $_POST["input_user"];
            $pass = $_POST["input_pass"];
            if(isset($user)){
                $usuarioDB = $this->modelUser->getUser($user);
                if(isset($usuarioDB) && $usuarioDB){
                    // Existe el usuario    
                    if (password_verify($pass, $usuarioDB->password)){
                        session_start();
                        $_SESSION["DIRECCION"] = $usuarioDB->direccion;
                        $_SESSION['LAST_ACTIVITY'] = time();
                        //Para redigirlo a la pagina del administrador
                        header("Location: ".BASE_URL."administracion");
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