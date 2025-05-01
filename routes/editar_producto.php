<?php
require_once '../controllers/ProductoController.php';
require_once '../controllers/CategoriaController.php';

$productoController = new ProductoController();
$categoriaController = new CategoriaController();
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$id) {
    die("Error: ID de producto no válido.");
}

$producto = $productoController->obtenerProductoPorID($id);
$categorias = $categoriaController->obtenerCategorias();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $categoria_id = $_POST['categoria_id'];
    $imagen = $_FILES['imagen']['name'];

    // Si el usuario no sube una nueva imagen, mantener la actual
    if (empty($imagen)) {
        $imagen = $producto['imagen'];
    } else {
        // Mover la nueva imagen a la carpeta img
        $destino = "../views/img/" . basename($imagen);
        move_uploaded_file($_FILES['imagen']['tmp_name'], $destino);
    }

    $productoController->actualizarProducto($id, $nombre, $descripcion, $precio, $categoria_id, $imagen);
    header("Location: producto_lista.php");
    exit;
}
include_once "views/editar_productos.php"
?>
