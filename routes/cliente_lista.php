<?php
require_once '../models/cliente.php';

$cliente = new cliente();
$clientes = $cliente->obtenerClientes();
include_once "../views/cliente_listas.php"
?>

