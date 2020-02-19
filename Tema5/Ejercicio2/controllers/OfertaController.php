<?php
    require_once 'models/OfertaModel.php';
    class OfertaController{
        
        public function index(){
            $oferta = new OfertaModel();
            $ListadoView=$oferta->get_ofertas();
            require_once 'views/oferta/ListadoView.phtml';
        }
        
        public function NuevaOferta(){
            if(!isset($_POST['submit'])){
                require_once 'views/oferta/RegistroView.phtml';
            }else{
                $titulo= isset($_POST['titulo']) ? $_POST['titulo'] : false;
                $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
                $filename='';
                if(isset($_FILES['imagen'])){
                    $file=$_FILES['imagen'];
                    $filename=$file['name'];
                    $minetype=$file['type'];
                    
                    if($minetype=="imagen/jpg" || $minetype=="imagen/jpeg" || $minetype=="imagen/png" || $minetype=="imagen/gif"){
                        if(!is_dir("uploads/img")){
                            mkdir("uploads/img",0777,true);
                        }
                        move_uploaded_file($file['tmp_name'],"uploads/img".$filename);
                    }
                }
                echo "hola";
                $oferta= new OfertaModel($titulo,$descripcion,$filename);
                if (isset($_GET['id'])){
                    $id=$_GET['id'];
                    $modificar=$oferta->modificar($id);
                    if($modificar){
                        $_SESSION['registro'] = "complete";
                        header("location:index.php?c=Oferta&&a=index");
                    } else {
                        $_SESSION['registro'] = "failed";
                    }
                }else{
                    
                    $save=$oferta->save();

                    if($save){
                        $_SESSION['registro'] = "complete";
                        header("location:index.php?c=Oferta&&a=index");
                    } else {
                        $_SESSION['registro'] = "failed";
                    }
                }
            }
        }
        
        public function borrarOferta() {
            $id= $_GET['id'];
            
            if($id){
                    $oferta= new OfertaModel();
                    $borrar=$oferta->setId($id);
                    $borrar=$oferta->borrar();
                    
                    if($borrar){
                        $_SESSION['borrar'] = "complete";
                        header("location:index.php?c=Oferta&&a=index");
                    } else {
                        $_SESSION['borrar'] = "failed";
                    }
            } else {
                $_SESSION['borrar'] = "failed";
            }
        }
        
        public function modificar() {
            if (!isset($_GET['id'])){
                header("location:index.php?c=Oferta&&a=index");
            }else{
                $id= $_GET['id'];
                
                $oferta = new OfertaModel();
                $OfertaById=$oferta->get_ofertaById($id);
                require_once 'views/oferta/RegistroView.phtml';
                
                
            }
        }
        
    }
?>
