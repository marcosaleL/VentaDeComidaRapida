<?php
        /*Esta función se tiene que llamar en las funciones que se necesite comprobar que la sesion esta iniciada.
        Por eso esta funcion tiene que estar en una clase auxiliar llamada Helper, entonces cada
        vez que necesitamos consultar si esta logeado, la llamamos desde Helper.*/
        class Helper{

            public function __construct(){
                if (session_status() != PHP_SESSION_ACTIVE) {
                    session_start();
                }
            }

            public function checkLoggedIn(){
                if(!isset($_SESSION["DIRECCION"])){
                    return false;
                }else{
                    if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) { 
                        return false;
                    }            
                    $_SESSION['LAST_ACTIVITY'] = time();
                    return true;
                }
            }
            

        }

?>
