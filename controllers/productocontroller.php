<?php
require_once '../models/Producto.php';

class ProductoController {
    private $productoModel;

    public function __construct() {
        $this->productoModel = new Producto();
    }

    public function obtenerProductos() {
        return $this->productoModel->obtenerProductos();
    }

    public function obtenerProductoPorID($id) {
        return $this->productoModel->obtenerProductoPorID($id);
    }

    public function agregarProducto($nombre, $descripcion, $precio, $categoria_id, $imagen) {
        return $this->productoModel->agregarProducto($nombre, $descripcion, $precio, $categoria_id, $imagen);
    }

    public function actualizarProducto($id, $nombre, $descripcion, $precio, $categoria_id, $imagen) {
        return $this->productoModel->actualizarProducto($id, $nombre, $descripcion, $precio, $categoria_id, $imagen);
    }

    public function eliminarProducto($id) {
        return $this->productoModel->eliminarProducto($id);
    }
}