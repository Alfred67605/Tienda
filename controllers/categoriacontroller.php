<?php
require_once '../models/Categoria.php';

class CategoriaController {
    private $categoriaModel;

    public function __construct() {
        $this->categoriaModel = new Categoria();
    }

    // Listar todas las categorías
    public function obtenerCategorias() {
        return $this->categoriaModel->obtenerCategorias();
    }

    // Agregar nueva categoría
    public function agregarCategoria($nombre, $descripcion) {
        return $this->categoriaModel->agregarCategoria($nombre, $descripcion);
    }

    
}

// Ejemplo de uso
//$controller = new CategoriaController();
//$categorias = $controller->obtenerCategorias();
//print_r($categorias);