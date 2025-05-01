<?php
require_once '../controllers/ProductoController.php';

$productoController = new ProductoController();
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$id) {
    die("Error: ID de producto no válido.");
}

$producto = $productoController->obtenerProductoPorID($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resultado = $productoController->eliminarProducto($id);

    if (!$resultado) {
        echo "<p style='color: red;'>❌ No puedes eliminar este producto porque tiene compras registradas.</p>";
    } else {
        header("Location: producto_lista.php");
        exit;
    }
}
include_once "views/eliminar_productos.php"
?>

