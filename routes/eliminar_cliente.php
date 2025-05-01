<?php
require_once '../controllers/ClienteController.php';

$clienteController = new ClienteController();
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$id) {
    die("Error: ID de cliente no válido.");
}

$cliente = $clienteController->obtenerClientePorID($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resultado = $clienteController->eliminarCliente($id);

    if (!$resultado) {
        echo "<p style='color: red;'>❌ No puedes eliminar este cliente porque tiene compras registradas.</p>";
    } else {
        header("Location: cliente_lista.php");
        exit;
    }
}
include_once "views/eliminar_clientes.php"
?>

