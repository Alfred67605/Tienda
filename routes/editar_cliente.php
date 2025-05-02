<?php
require_once '../models/Cliente.php';

$clienteModel = new Cliente(); // Instancia correcta del modelo
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$id) {
    die("Error: ID de cliente no válido.");
}

$cliente = $clienteModel->obtenerClientePorID($id); // Ahora `$cliente` almacena los datos
if (!$cliente) {
    die("Error: Cliente no encontrado.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    // Usar la instancia correcta del modelo para actualizar
    $resultado = $clienteModel->actualizarCliente($id, $nombre, $correo, $telefono, $direccion);

    if (!$resultado) {
        echo "<p style='color: red;'>❌ Error al actualizar el cliente.</p>";
    } else {
        header("Location: cliente_lista.php");
        exit;
    }
}

include_once "../views/editar_clientes.php";
