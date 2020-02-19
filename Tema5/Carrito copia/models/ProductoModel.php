<?php
    class ProductoModel extends Database{
        private $id;
        private $categoria_id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $stock;
        private $oferta;
        private $fecha;
        private $imagen;
        private $conn;

        
        public function __construct($categoria_id=null ,$nombre=null ,$descripcion=null ,$precio=null,$stock=null,$oferta=null,$fecha=null, $imagen=null) {
            $this->conn= parent::conectaDB();
            if(isset($categoria_id)){
                $this->$categoria_id=$categoria_id;
            }
            if(isset($nombre)){
                $this->nombre=$nombre;
            }
            if(isset($descripcion)){
                $this->$descripcion=$descripcion;
            }
            if(isset($precio)){
                $this->precio=$precio;
            }
            if(isset($stock)){
                $this->stock=$stock;
            }
            if(isset($oferta)){
                $this->oferta=$oferta;
            }
            if(isset($fecha)){
                $this->fecha=$fecha;
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
         * Get the value of categoria_id
         */ 
        public function getCategoria_id()
        {
                return $this->categoria_id;
        }

        /**
         * Set the value of categoria_id
         *
         * @return  self
         */ 
        public function setCategoria_id($categoria_id)
        {
                $this->categoria_id = $categoria_id;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }

        /**
         * Get the value of stock
         */ 
        public function getStock()
        {
                return $this->stock;
        }

        /**
         * Set the value of stock
         *
         * @return  self
         */ 
        public function setStock($stock)
        {
                $this->stock = $stock;

                return $this;
        }

        /**
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        /**
         * Get the value of oferta
         */ 
        public function getOferta()
        {
                return $this->oferta;
        }

        /**
         * Set the value of oferta
         *
         * @return  self
         */ 
        public function setOferta($oferta)
        {
                $this->oferta = $oferta;

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

        public function getAll(){
                $sql = "SELECT * FROM productos ORDER BY id DESC; ";
                $result = $this->conn->query($sql);
                return $result;
            }

            public function getRandom($limit){
                $sql = "SELECT * FROM productos WHERE stock > 0 ORDER BY RAND() LIMIT {$limit}; ";
                $result = $this->conn->query($sql);
                return $result;
            }


}
    
?>