<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vehiculo
 *
 * @author damis
 */
abstract class vehiculo {
    //put your code here
    private $vehiculosCreados;
    private $KmRecorridos;
    
    public function __construct($v=0,$km=0) {
        $this->KmRecorridos=$km;
        $this->vehiculosCreados=$v;
    }
    
    
    
}
