<?php
    class PedidoModel extends Database{
        private $id;
        private $usuario_id;
        private $provincia;
        private $localidad;
        private $direccion;
        private $coste;
        private $estado;
        private $fecha;
        private $hora;
        private $conn;

        
        public function __construct($usuario_id=null ,$provincia=null ,$localidad=null ,$direccion=null,$coste=null,$estado=null,$fecha=null, $hora=null) {
            $this->conn= parent::conectaDB();
            if(isset($usuario_id)){
                $this->$usuario_id=$usuario_id;
            }
            if(isset($provincia)){
                $this->provincia=$provincia;
            }
            if(isset($localidad)){
                $this->$localidad=$localidad;
            }
            if(isset($direccion)){
                $this->$direccion=$direccion;
            }
            if(isset($coste)){
                $this->coste=$coste;
            }
            if(isset($estado)){
                $this->$estado=$estado;
            }
            if(isset($fecha)){
                $this->fecha=$fecha;
            }       
            if(isset($hora)){
                $this->hora=$hora;
            }

                
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
         * Get the value of usuario_id
         */ 
        public function getUsuario_id()
        {
                return $this->usuario_id;
        }

        /**
         * Set the value of usuario_id
         *
         * @return  self
         */ 
        public function setUsuario_id($usuario_id)
        {
                $this->usuario_id = $usuario_id;

                return $this;
        }

        /**
         * Get the value of provincia
         */ 
        public function getProvincia()
        {
                return $this->provincia;
        }

        /**
         * Set the value of provincia
         *
         * @return  self
         */ 
        public function setProvincia($provincia)
        {
                $this->provincia = $provincia;

                return $this;
        }

        /**
         * Get the value of localidad
         */ 
        public function getLocalidad()
        {
                return $this->localidad;
        }

        /**
         * Set the value of localidad
         *
         * @return  self
         */ 
        public function setLocalidad($localidad)
        {
                $this->localidad = $localidad;

                return $this;
        }

        /**
         * Get the value of direccion
         */ 
        public function getDireccion()
        {
                return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @return  self
         */ 
        public function setDireccion($direccion)
        {
                $this->direccion = $direccion;

                return $this;
        }

        /**
         * Get the value of coste
         */ 
        public function getCoste()
        {
                return $this->coste;
        }

        /**
         * Set the value of coste
         *
         * @return  self
         */ 
        public function setCoste($coste)
        {
                $this->coste = $coste;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        /**
         * Set the value of hora
         *
         * @return  self
         */ 
        public function setHora($hora)
        {
                $this->hora = $hora;

                return $this;
        }
        public function getHora()
        {
                return $this->hora;
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
        }
    
?>