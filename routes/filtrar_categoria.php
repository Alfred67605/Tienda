<?php
include __DIR__ . '/../Models/Connection.php';

// Crear instancia y conectar
$db = new Connection();
$conexion = $db->connect();

// Obtener la categoría seleccionada
$categoria_id = isset($_GET['categoria']) ? $_GET['categoria'] : null;

// Mostrar todos los productos organizados por categoría
if ($categoria_id === 'all') {
    $sql_categorias = "SELECT * FROM categoria";
    $categorias = mysqli_query($conexion, $sql_categorias);
} else {
    $sql = "SELECT * FROM producto WHERE categoria_id = " . intval($categoria_id);
    $resultado = mysqli_query($conexion, $sql);
}
include_once "../views/filtrar_categoria.php"

?>

