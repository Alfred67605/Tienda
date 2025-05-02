<?php
require_once '../models/producto.php';

$producto = new producto();
$productos = $producto->obtenerProductos();
include_once "../views/productos_listas.php"
?>
