<?php
    class DatosModel extends Database{
        private $id;
        private $name;
        private $address;
        private $descripcion;
        private $telf;
        private $type;
        private $conn;


        public function __construct($name=null,$address=null,$descripcion=null,$telf=null,$type=null) {
            $this->conn= parent::conectaDB();
            if(isset($name)){
                $this->name=$name;
            }
            if(isset($address)){
                $this->address=$address;
            }
            if(isset($descripcion)){
                $this->descripcion=$descripcion;
            }
            if(isset($telf)){
                $this->telf=$telf;
            }
            if(isset($type)){
                $this->type=$type;
            }
        }

        function getId() {
            return $this->id;
        }

        function getName() {
            return $this->name;
        }

        function getAddress() {
            return $this->address;
        }

        function getDescripcion() {
            return $this->descripcion;
        }

        function getTelf() {
            return $this->telf;
        }

        function getType() {
            return $this->type;
        }

        function getConn() {
            return $this->conn;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setAddress($address) {
            $this->address = $address;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        function setTelf($telf) {
            $this->telf = $telf;
        }

        function setType($type) {
            $this->type = $type;
        }

        function setConn($conn) {
            $this->conn = $conn;
        }

        public function get_all(){
            $consulta= $this->conn->query("Select * From TEST_CLIENTS order by id DESC");
            return $consulta;
        }

        public function get_uno($id){
            $consulta= $this->conn->query("Select * From TEST_CLIENTS where id=$id order by id DESC");
            return $consulta;
        }

        public function save(){
            $sql= "insert into TEST_CLIENTS values(null,'{$this->getName()}','{$this->getAddress()}', '{$this->getDescripcion()}', '{$this->getTelf()}', '{$this->getType()}');";
            $save= $this->conn->exec($sql);
            
            $result= FALSE;
            if($save){
                $result=true;
            }
            
            return $result;
        }
    }
?>