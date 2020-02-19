<?php
    require_once 'models/NotasModel.php';
    require_once 'models/UsuariosModel.php';
    class NotasController{
        
        public function index(){
            require_once 'views/usuario/principal.phtml';
        }
        
        public function listarTodasNotas(){
            $notas = new NotasModel();
            $listarTodasNotas=$notas->get_all();
            require_once 'views/notas/listarTodasNotas.phtml';
        }
        
        public function save(){
            if(!isset($_POST['submit'])){
                require_once 'views/notas/InsertarNota.phtml';
            }else{
                $usuario_id= $_POST['usuario_id'];
                $titulo= isset($_POST['titulo']) ? $_POST['titulo'] : false;
                $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
                
                if($usuario_id && $titulo && $descripcion){
                    $notas= new NotasModel($usuario_id, $titulo, $descripcion);
                    $save=$notas->save();
                    
                    if($save){
                        $_SESSION['registro'] = "complete";
                        header("location:index.php?c=Notas&&a=listarTodasNotas");
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
