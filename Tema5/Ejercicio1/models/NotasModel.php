<?php
    class NotasModel extends Database{
        private $id;
        private $usuario_id;
        private $titulo;
        private $descripcion;
        private $fecha;
        private $conn;
        
        public function __construct($usuario_id=null,$titulo=null, $descripcion=null) {
            $this->conn= parent::conectaDB();
            if(isset($usuario_id)){
                $this->usuario_id=$usuario_id;
            }
            if(isset($titulo)){
                $this->titulo = $titulo;
            }
            if(isset($descripcion)){
                $this->descripcion = $descripcion;
            }
            
        }
        
        function getId() {
            return $this->id;
        }

        function getUsuario_id() {
            return $this->usuario_id;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function getDescripcion() {
            return $this->descripcion;
        }

        function getFecha() {
            return $this->fecha;
        }

        function getConn() {
            return $this->conn;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setUsuario_id($usuario_id) {
            $this->usuario_id = $usuario_id;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        function setFecha($fecha) {
            $this->fecha = $fecha;
        }

        function setConn($conn) {
            $this->conn = $conn;
        }

        public function get_all(){
            $consulta= $this->conn->query("SELECT notas.titulo, notas.descripcion,usuarios.nombre FROM notas JOIN usuarios on (notas.usuario_id=usuarios.id) order by notas.usuario_id DESC");
            return $consulta;
        }
        
        public function save(){
            $sql= "insert into notas values(null,{$this->getUsuario_id()},'{$this->getTitulo()}', '{$this->getDescripcion()}', CURDATE());";
            $save= $this->conn->exec($sql);
            
            $result= FALSE;
            if($save){
                $result=true;
            }
            
            return $result;
        }
        
        /*public function borrar() {
            $sql= "delete from notas where id={$this->getId()};";
            $borrar= $this->conn->exec($sql);
            
            $result= FALSE;
            if($borrar){
                $result=true;
            }
            
            return $result;
        }*/
    }
    
?>