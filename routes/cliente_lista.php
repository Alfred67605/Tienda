<?php
require_once '../controllers/ClienteController.php';

$clienteController = new ClienteController();
$clientes = $clienteController->obtenerClientes();
include_once "views/cliente_listas.php"
?>

