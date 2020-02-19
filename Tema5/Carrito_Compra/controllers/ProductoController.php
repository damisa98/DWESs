<?php

require_once 'models/producto.php';

class ProductoController {

    public function index() {
        $productos = new producto();
        $producto = $productos->getRandom(5);
        require_once 'views/producto/productosDestacados.phtml';
    }

}


    ?>