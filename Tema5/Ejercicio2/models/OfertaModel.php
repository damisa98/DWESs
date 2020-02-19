<?php
    class OfertaModel extends Database{
        private $id;
        private $titulo;
        private $imagen;
        private $descripcion;
        private $conn;
        
        public function __construct($titulo=null,$descripcion=null,$imagen=null) {
            $this->conn= parent::conectaDB();
            if(isset($titulo)){
                $this->titulo=$titulo;
            }
            if(isset($imagen)){
                $this->imagen=$imagen;
            }
            if(isset($descripcion)){
                $this->descripcion=$descripcion;
            }
        }
        
        
        function getId() {
            return $this->id;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function getImagen() {
            return $this->imagen;
        }

        function getDescripcion() {
            return $this->descripcion;
        }

        function getConn() {
            return $this->conn;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function setImagen($imagen) {
            $this->imagen = $imagen;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        function setConn($conn) {
            $this->conn = $conn;
        }
        
        public function get_ofertas(){
                $consulta= $this->conn->query("SELECT * FROM oferta order by oferta.id DESC");
            return $consulta;
        }
        
        public function get_ofertaById($id){
                $consulta= $this->conn->query("SELECT oferta.id, oferta.titulo,oferta.imagen,oferta.descripcion FROM oferta where oferta.id=$id order by oferta.id DESC");
            return $consulta;
        }
        
        public function save(){
            $sql= "insert into oferta values(null,'{$this->getTitulo()}','{$this->getImagen()}', '{$this->getDescripcion()}');";
            $save= $this->conn->exec($sql);
            
            $result= FALSE;
            if($save){
                $result=true;
            }
            
            return $result;
        }
        
        public function borrar() {
            $sql= "delete from oferta where id={$this->getId()};";
            $borrar= $this->conn->exec($sql);
            
            $result= FALSE;
            if($borrar){
                $result=true;
            }
            
            return $result;
        }
        
        public function modificar($id) {
           if($this->getImagen() != ''){
                $sql= "UPDATE oferta SET titulo='{$this->getTitulo()}',descripcion='{$this->getDescripcion()}',imagen='{$this->getImagen()}'  WHERE id=$id";
            }else{
                $sql= "UPDATE oferta SET titulo='{$this->getTitulo()}',descripcion='{$this->getDescripcion()}' WHERE id=$id";
            }
            $modificar= $this->conn->exec($sql);
            $result= FALSE;
            if($modificar){
                $result=true;
            }
            
            return true;
        }
    }
    
?>