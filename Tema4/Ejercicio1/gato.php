<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gato
 *
 * @author damis
 */
require_once 'animal.php';

class gato extends animal {
    //put your code here
    private $raza;


    public function __construct($s = "desconocido", $r = "desconocido") {
        parent::__construct($s);
        
        $this->raza=$r;
        
    }
    
    public function getRaza(){
        return $this->raza;
    }
    
    public function setRaza($r){
        $this->raza=$r;
    }
    
    public function __toString() {
        return parent::__toString()."$this->raza <br>";
    }
    
    public function comer($comida){
        if($comida != "pescado"){
            echo '<br>Esa comida no me gusta la tiro al suelo exclavo';
        }else{
            echo '<br>Eso ya me gusta bien hecho exclavo';
        }
    }
}



?>