<?php
require_once '../models/Cliente.php';

$clienteModel = new Cliente(); // Instancia correcta del modelo
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$id) {
    die("Error: ID de cliente no válido.");
}

// Obtener los datos del cliente sin sobrescribir la instancia del modelo
$cliente = $clienteModel->obtenerClientePorID($id);
if (!$cliente) {
    die("Error: Cliente no encontrado.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Usar la instancia correcta del modelo para eliminar
    $resultado = $clienteModel->eliminarCliente($id);

    if (!$resultado) {
        echo "<p style='color: red;'>❌ No puedes eliminar este cliente porque tiene compras registradas.</p>";
    } else {
        header("Location: cliente_lista.php");
        exit;
    }
}

include_once "../views/eliminar_clientes.php";