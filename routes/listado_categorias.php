<?php
include __DIR__ . '/../Models/Connection.php';

// Crear instancia y conectar
$db = new Connection();
$conexion = $db->connect();

// Obtener todas las categorías
$sql = "SELECT * FROM categoria";
$resultado = mysqli_query($conexion, $sql);
include_once "../views/listado_categoria.php"

?>

