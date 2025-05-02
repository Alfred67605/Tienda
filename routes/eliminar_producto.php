<?php
require_once '../models/Producto.php';

$productoModel = new Producto(); // Instancia correcta del modelo
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$id) {
    die("Error: ID de producto no válido.");
}

// Obtener los datos del producto sin sobrescribir la instancia del modelo
$producto = $productoModel->obtenerProductoPorID($id);
if (!$producto) {
    die("Error: Producto no encontrado.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Usar la instancia correcta del modelo para eliminar
    $resultado = $productoModel->eliminarProducto($id);

    if (!$resultado) {
        echo "<p style='color: red;'>❌ No puedes eliminar este producto porque tiene compras registradas.</p>";
    } else {
        header("Location: producto_lista.php");
        exit;
    }
}

include_once "../views/eliminar_productos.php";

