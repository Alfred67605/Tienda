<?php
require_once '../models/Compra.php';

class CompraController {
    private $compraModel;

    public function __construct() {
        $this->compraModel = new Compra();
    }

    public function registrarCompra($cliente_id, $producto_id, $cantidad) {
        return $this->compraModel->registrarCompra($cliente_id, $producto_id, $cantidad);
    }

    public function obtenerCompras() {
        return $this->compraModel->obtenerCompras();
    }
}