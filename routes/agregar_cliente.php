<?php
require_once '../models/cliente.php';
require_once '../models/producto.php';
require_once '../models/compra.php';

$cliente = new cliente();
$producto = new producto();
$compra = new compra();
$productos = $producto->obtenerProductos();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $producto_id = $_POST['producto_id'];
    $cantidad = $_POST['cantidad'];

    $cliente_id = $cliente->agregarCliente($nombre, $correo, $telefono, $direccion);
    $compra->registrarCompra($cliente_id, $producto_id, $cantidad);

    header("Location: cliente_lista.php");
    exit;
}
include_once "../views/agregar_clientes.php"
?>

