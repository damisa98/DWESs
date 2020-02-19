<?php
    require_once 'models/DatosModel.php';
    class DatosController{
        
        public function index(){
            require_once 'views/mostrar/datos.phtml';
        }
        
        public function AlgunosDatos(){
            $datos = new DatosModel();
            $AlgunosDatos=$datos->get_all();
            require_once 'views/mostrar/AlgunosDatos.phtml';
        }

        public function MotrarUno(){
            $id=$_GET['id'];
            $mostrarUno = new DatosModel();
            $Mostrar=$mostrarUno->get_uno($id);
            require_once 'views/mostrar/MostrarUno.phtml';
        }

        public function save(){
            if(!isset($_POST['submit'])){
                require_once 'views/mostrar/insertar.phtml';
            }else{
                $Name= isset($_POST['Name']) ? $_POST['Name'] : false;
                $Address= isset($_POST['Address']) ? $_POST['Address'] : false;
                $descripcion= isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
                $telf= isset($_POST['telf']) ? $_POST['telf'] : false;
                $type= isset($_POST['type']) ? $_POST['type'] : false;
                
                if($Name && $Address && $descripcion && $telf && $type ){
                    $insertar= new DatosModel($Name, $Address, $descripcion, $telf,$type);
                    $save=$insertar->save();
                    
                    if($save){
                        $_SESSION['registro'] = "complete";
                        header("location:index.php?c=Datos&&a=AlgunosDatos");
                    } else {
                        $_SESSION['registro'] = "failed";
                    }
                } else {
                    $_SESSION['registro'] = "failed";
                }
            }
        }
    }
?>
