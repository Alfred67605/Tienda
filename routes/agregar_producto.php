<?php
require_once '../models/producto.php';
require_once '../models/categoria.php';

$producto = new producto();
$categoria = new categoria();
$categorias = $categoria->obtenerCategorias();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $categoria_id = $_POST['categoria_id'];
    $imagen = $_FILES['imagen']['name'];

    // Mover la imagen subida a la carpeta img
    $destino = "img/" . basename($imagen);
    move_uploaded_file($_FILES['imagen']['tmp_name'], $destino);

    $producto->agregarProducto($nombre, $descripcion, $precio, $categoria_id, $destino);
    header("Location: producto_lista.php");
    exit;
}
include_once "../views/agregar_productos.php"
?>

