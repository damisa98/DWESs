<?php
    class UsuariosModel extends Database{
        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $fecha;
        private $conn;
        
        public function __construct($nombre=null,$apellidos=null,$email=null,$password=null) {
            $this->conn= parent::conectaDB();
            if(isset($nombre)){
                $this->nombre=$nombre;
            }
            if(isset($apellidos)){
                $this->apellidos=$apellidos;
            }
            if(isset($email)){
                $this->email=$email;
            }
            if(isset($password)){
                $this->password=$password;
            }
        }
        function getId() {
            return $this->id;
        }

        function getNombre() {
            return $this->nombre;
        }

        function getApellidos() {
            return $this->apellidos;
        }

        function getEmail() {
            return $this->email;
        }

        function getPassword() {
            return $this->password;
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

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function setApellidos($apellidos) {
            $this->apellidos = $apellidos;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setPassword($password) {
            $this->password = $password;
        }

        function setFecha($fecha) {
            $this->fecha = $fecha;
        }

        function setConn($conn) {
            $this->conn = $conn;
        }

        public function get_all(){
            $consulta= $this->conn->query("Select * From usuarios order by id DESC");
            return $consulta;
        }
        
        public function get_notas($id){
                $consulta= $this->conn->query("SELECT usuarios.id, usuarios.nombre,notas.titulo,notas.descripcion FROM notas JOIN usuarios ON notas.usuario_id=usuarios.id where usuarios.id=$id order by usuarios.id DESC");
            return $consulta;
        }
        
        public function save(){
            $sql= "insert into usuarios values(null,'{$this->getNombre()}','{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', CURDATE());";
            $save= $this->conn->exec($sql);
            
            $result= FALSE;
            if($save){
                $result=true;
            }
            
            return $result;
        }
        
        public function borrar() {
            $sql= "delete from usuarios where id={$this->getId()};";
            $borrar= $this->conn->exec($sql);
            
            $result= FALSE;
            if($borrar){
                $result=true;
            }
            
            return $result;
        }
    }
    
?>