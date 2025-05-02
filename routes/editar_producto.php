<?php
require_once '../models/Producto.php';
require_once '../models/Categoria.php';

$productoModel = new Producto(); // Instancia correcta del modelo
$categoriaModel = new Categoria();

$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$id) {
    die("Error: ID de producto no válido.");
}

$producto = $productoModel->obtenerProductoPorID($id); // Ahora `$producto` almacena los datos del producto
$categorias = $categoriaModel->obtenerCategorias();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $categoria_id = $_POST['categoria_id'];
    $imagen = $_FILES['imagen']['name'];

    // Si no se sube nueva imagen, conservar la actual
    if (empty($imagen)) {
        $imagen = $producto['imagen'];
    } else {
        $destino = "../public/img/" . basename($imagen);
        move_uploaded_file($_FILES['imagen']['tmp_name'], $destino);
    }

    // Usar la instancia correcta del modelo para actualizar
    $productoModel->actualizarProducto($id, $nombre, $descripcion, $precio, $categoria_id, $imagen);
    
    header("Location: producto_lista.php");
    exit;
}

include_once "../views/editar_productos.php";
