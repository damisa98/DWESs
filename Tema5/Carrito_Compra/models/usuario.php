<?php
    class usuario extends Database{
        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $rol;
        private $imagen;
        private $conn;
        
        public function __construct($nombre=null,$apellidos=null,$email=null,$password=null,$rol=null,$imagen=null) {
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
                $this->passwor=$password;
            }
            if(isset($rol)){
                $this->rol=$rol;
            }
            if(isset($imagen)){
                $this->imagen=$imagen;
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

        function getRol() {
            return $this->rol;
        }

        function getImagen() {
            return $this->imagen;
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

        function setRol($rol) {
            $this->rol = $rol;
        }

        function setImagen($imagen) {
            $this->imagen = $imagen;
        }

        function setConn($conn) {
            $this->conn = $conn;
        }
        
        public function BuscarEmail($email){
            $consulta= $this->conn->query("SELECT * FROM usuarios where email='$email' order by usuarios.id DESC");
            return $consulta;
        }
        
        



    }
?>