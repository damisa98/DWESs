<?php
    class UsuarioModel extends Database{
        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $rol;
        private $imagen;

        
        public function __construct($nombre=null ,$apellidos=null ,$email=null,$password=null,$rol=null,$imagen=null) {
            $this->conn= parent::conectaDB();
            if(isset($nombre)){
                $this->nombre=$nombre;
            }
            if(isset($apellidos)){
                $this->$apellidos=$apellidos;
            }
            if(isset($email)){
                $this->email=$email;
            }
            if(isset($password)){
                $this->password=$password;
            }
            if(isset($rol)){
                $this->rol=$rol;
            }
            if(isset($imagen)){
                $this->imagen=$imagen;
            }
                
        }
      
        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellidos
         */ 
        public function getApellidos()
        {
                return $this->apellidos;
        }

        /**
         * Set the value of apellidos
         *
         * @return  self
         */ 
        public function setApellidos($apellidos)
        {
                $this->apellidos = $apellidos;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of rol
    */
 

        /**
         * Set the value of rol
         *
         * @return  self
         */ 
        public function setRol($rol)
        {
                $this->rol = $rol;

                return $this;
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

                return $this;
        }

         /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    

         public function loguearte($email){
            $consulta= $this->conn->query("SELECT * FROM usuarios where email='$email'");
            return $consulta;
        
        }
    /* 
        public function getOfertaByid($id){          
            $consulta= $this->conn->query("Select * From oferta WHERE id=$id");
            return $consulta;
        }
        
        public function insert(){
            $sql= "insert into oferta values(null,'{$this->getTitulo()}','{$this->getImagen()}', '{$this->getDescripcion()}');";
            $save= $this->conn->exec($sql);
            
            $result= FALSE;
            if($save){
                $result=true;
            }           
            return $result;
        }


        public function delete(){
            $sql= "DELETE FROM oferta WHERE id={$this->getId()};";
            $delete= $this->conn->exec($sql);
            
            $result= FALSE;
            if($delete){
                $result=true;
            }           
            return $result;
        }

        public function modificar($id){

            $sql= "UPDATE oferta SET titulo='{$this->getTitulo()}', descripcion='{$this->getDescripcion()}' ";
         
            if($this->getImagen() != null){
                $sql.=", imagen='{$this->getImagen()}' ";    //si no existe la imagen se sube, si no no
            }
            
            $sql.="WHERE id=$id";
            
            $save= $this->conn->exec($sql);
            
            $result= FALSE;
            if($save){
                $result=true;
            }           
            return $result;

       
        }*/

        /**
         * Get the value of rol
         */ 
       
    }
?>