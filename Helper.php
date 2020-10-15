<?php
        /*Esta función se tiene que llamar en las funciones que se necesite comprobar que la sesion esta iniciada.
        Por eso esta funcion tiene que estar en una clase auxiliar llamada Helper, entonces cada
        vez que necesitamos consultar si esta logeado, la llamamos desde Helper.*/
        class Helper{
            public function checkLoggedIn(){
                session_start();
                //Si usas la variables $_SESSION si o si, tenes que llamar antes a session_start() 
                if(!isset($_SESSION["DIRECCION"])){
                    //Si no esta seteada lo redirigo al login para que pueda ingresar
                    //header("Location: ". login);
                    return false;
                    //die();
                }else{
                    //Si no, compruebo la ultima actividad y por un timer y si excedio le cierro la sesion
                    //Esos 1000000 estan en segundos
                    if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 200)) { 
                        //header("Location: ". logout);
                        return false;
                        //die();
                    }            
                    $_SESSION['LAST_ACTIVITY'] = time();
                    return true;
                }
            }
        }

?>
