<?php
    require_once 'models/usuario.php';

    class UsuarioController{

        public function index(){
            require_once 'views/layout/aside.php';
        }

        public function ComprobarLogueo(){
            if(!isset($_POST['submit'])){
                //require_once 'views/usuario/logueo.phtml';
            }else{
                $email= isset($_POST['email']) ? $_POST['email'] : false;
                $contrasenia= isset($_POST['contrasenia']) ? $_POST['contrasenia'] : false;

                $usuario = new usuario();
                $CompobarUser = $usuario->BuscarEmail($email);

                $user = $CompobarUser ->fetchObject();
                if($user->email==$email && $user->password == $contrasenia){
                    if($user->rol=='admin'){
                        $_SESSION['admin']=true;
                    }else{
                        $_SESSION['admin']=false;
                    }
                        $_SESSION['user']=$user;
                    require_once 'views/layout/aside.php';
                }else{
                    $_SESSION['Comprobar']="Error contraseña o email erroneos";
                    require_once 'views/layout/aside.php';
                }
            }
        }

        public function CerrarSession(){
            $_SESSION['user']=null;
            header("Location:index.php");
            //require_once 'views/usuario/logueo.phtml';
        }

    }
?>