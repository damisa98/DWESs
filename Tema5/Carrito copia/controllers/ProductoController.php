<?php

require_once 'models/ProductoModel.php';

class ProductoController {

    public function index() {
        $productos = new ProductoModel();
        $producto = $productos->getRandom(5);
        require_once 'views/producto/productosDestacados.php';
    }

}


    ?>