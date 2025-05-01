<?php
require_once '../controllers/CompraController.php';

$compraController = new CompraController();
$compras = $compraController->obtenerCompras();
include_once "views/compra_listas.php"
?>
