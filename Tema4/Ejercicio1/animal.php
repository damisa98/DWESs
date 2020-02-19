<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of animal
 *
 * @author damis
 */
abstract class animal {
    //put your code here
    private $sexo;


    public function __construct($s="desconocido") {
        $this->sexo=$s;
    }
    
    public function getSexo(){
        return $this->sexo;
    }
    
    public function setSexo($s){
        $this->sexo=$s;
    }
    
    public function __toString() {
        return "<hr> $this->sexo <br>";
    }
    
    public function duerme(){
        return "<br>Me voy a dormir, Zzzzzzz sh shut up";
    }
    
    
}


?>