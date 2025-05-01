<?php
require_once '../controllers/ProductoController.php';

$productoController = new ProductoController();
$productos = $productoController->obtenerProductos();
include_once "views/productos_listas.php"
?>
