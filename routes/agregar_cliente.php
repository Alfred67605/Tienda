<?php
require_once '../controllers/ClienteController.php';
require_once '../controllers/ProductoController.php';
require_once '../controllers/CompraController.php';

$clienteController = new ClienteController();
$productoController = new ProductoController();
$compraController = new CompraController();
$productos = $productoController->obtenerProductos();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $producto_id = $_POST['producto_id'];
    $cantidad = $_POST['cantidad'];

    $cliente_id = $clienteController->agregarCliente($nombre, $correo, $telefono, $direccion);
    $compraController->registrarCompra($cliente_id, $producto_id, $cantidad);

    header("Location: cliente_lista.php");
    exit;
}
include_once "views/agregar_clientes.php"
?>

