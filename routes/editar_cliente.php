<?php
require_once '../controllers/ClienteController.php';

$clienteController = new ClienteController();
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$id) {
    die("Error: ID de cliente no válido.");
}

$cliente = $clienteController->obtenerClientePorID($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $resultado = $clienteController->actualizarCliente($id, $nombre, $correo, $telefono, $direccion);

    if (!$resultado) {
        echo "<p style='color: red;'>❌ Error al actualizar el cliente.</p>";
    } else {
        header("Location: cliente_lista.php");
        exit;
    }
}
include_once "views/editar_clientes.php"
?>

