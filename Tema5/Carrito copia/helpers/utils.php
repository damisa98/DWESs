<?php

class Utils{

    public static function mostrarError($name):string{
        $error="";
        if (isset($_SESSION[$name])){
            if($_SESSION[$name] == 'complete'){
                $error = '<strong class = "alert_green"> Registro completado correctamente</strong>';
            }
            else{
                $error = '<strong class = "alert_red"> Registro fallido, introduzca bien los datos</strong>';
            }

            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $error;
    }

    public static function identificar($user){       //si somos usuario normal, nos redirije a la página principal
        if(!isset($_SESSION[$user])){                
            header("Location:index.php");
        }
        else{
             return true;
        }
    }
}

?>