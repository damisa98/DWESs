<?php
    class CategoriaModel extends Database{
        private $id;
        private $nombre;

     
        public function __construct($nombre=null ) {
            $this->conn= parent::conectaDB();
            if(isset($nombre)){
                $this->$nombre=$nombre;
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

        public function TodasCategorias(){
                $consulta = $this->conn->query("Select * From categorias");
                return $consulta;
        }
}
    
?>