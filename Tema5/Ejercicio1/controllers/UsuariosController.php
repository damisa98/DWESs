<?php
    require_once 'models/UsuariosModel.php';
    require_once 'models/NotasModel.php';
    class UsuariosController{
        
        public function index(){
            require_once 'views/usuario/principal.phtml';
        }
        
        public function TodosUsuarios(){
            $usuarios = new UsuariosModel();
            $todosUsuarios=$usuarios->get_all();
            require_once 'views/usuario/TodosUsuarioView.phtml';
        }
        
        public function listar(){
            $id= $_GET['iduser'];
            $usuarios = new UsuariosModel();
            $todosUsuarios=$usuarios->get_notas($id);
            require_once 'views/usuario/TodosUsuarioNotas.phtml';
        }

        public function save(){
            if(!isset($_POST['submit'])){
                require_once 'views/usuario/registro.phtml';
            }else{
                $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : false;
                $apellidos= isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
                $email= isset($_POST['email']) ? $_POST['email'] : false;
                $password= isset($_POST['password']) ? $_POST['password'] : false;
                
                if($nombre && $apellidos && $email && $password){
                    $usuario= new UsuariosModel($nombre, $apellidos, $email, $password);
                    $save=$usuario->save();
                    
                    if($save){
                        $_SESSION['registro'] = "complete";
                        header("location:index.php?c=Usuarios&&a=TodosUsuarios");
                    } else {
                        $_SESSION['registro'] = "failed";
                    }
                } else {
                    $_SESSION['registro'] = "failed";
                }
            }
            //header("location:index.php?c=Usuarios&&a=save");
        }
        
        public function borrar() {
            $id= $_GET['iduser'];
            
            if($id){
                    $usuario= new UsuariosModel();
                    $borrar=$usuario->setId($id);
                    $borrar=$usuario->borrar();
                    
                    if($borrar){
                        $_SESSION['borrar'] = "complete";
                        header("location:index.php?c=Usuarios&&a=TodosUsuarios");
                    } else {
                        $_SESSION['borrar'] = "failed";
                    }
            } else {
                $_SESSION['borrar'] = "failed";
            }
        }
    }
?>
