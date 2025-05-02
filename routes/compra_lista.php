<?php
require_once '../models/compra.php';

$compra = new compra();
$compras = $compra->obtenerCompras();
include_once "../views/compra_listas.php"
?>
