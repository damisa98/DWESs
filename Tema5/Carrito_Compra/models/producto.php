<?php
    class producto extends Database{
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
      
        
        public function getNombre()
        {
                return $this->nombre;
        }

        
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }
 
        public function getImagen()
        {
                return $this->imagen;
        }

        
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

                return $this;
        }

        
        public function getCategoria_id()
        {
                return $this->categoria_id;
        }

        
        public function setCategoria_id($categoria_id)
        {
                $this->categoria_id = $categoria_id;

                return $this;
        }

        
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        public function getPrecio()
        {
                return $this->precio;
        }

        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }

       
        public function getStock()
        {
                return $this->stock;
        }

        public function setStock($stock)
        {
                $this->stock = $stock;

                return $this;
        }

        public function getFecha()
        {
                return $this->fecha;
        }

        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        
        public function getOferta()
        {
                return $this->oferta;
        }

        
        public function setOferta($oferta)
        {
                $this->oferta = $oferta;

                return $this;
        }

       
        public function getId()
        {
                return $this->id;
        }

        
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function get_all(){
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