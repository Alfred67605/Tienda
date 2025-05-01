<?php
require_once "Connection.php";

class Producto extends Connection {
    public function __construct() {
        $this->connect();
    }

    public function obtenerProductos() {
        $sql = "SELECT p.id, p.nombre, p.descripcion, p.precio, c.nombre AS categoria, p.imagen
                FROM producto p
                INNER JOIN categoria c ON p.categoria_id = c.id"; 
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
   
    public function obtenerProductoPorID($id) {
        $sql = "SELECT * FROM producto WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return ($result->num_rows > 0) ? $result->fetch_assoc() : null;
    }

    public function agregarProducto($nombre, $descripcion, $precio, $categoria_id, $imagen) {
        $sql = "INSERT INTO producto (nombre, descripcion, precio, categoria_id, imagen) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("ssdss", $nombre, $descripcion, $precio, $categoria_id, $imagen);
        return $stmt->execute();
    }

    public function actualizarProducto($id, $nombre, $descripcion, $precio, $categoria_id, $imagen) {
        $sql = "UPDATE producto SET nombre = ?, descripcion = ?, precio = ?, categoria_id = ?, imagen = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("ssdssi", $nombre, $descripcion, $precio, $categoria_id, $imagen, $id);
        return $stmt->execute();
    }

    public function eliminarProducto($id) {
        $sqlCheckCompras = "SELECT COUNT(*) AS total FROM compra WHERE producto_id = ?";
        $stmtCheck = $this->connection->prepare($sqlCheckCompras);
        $stmtCheck->bind_param("i", $id);
        $stmtCheck->execute();
        $result = $stmtCheck->get_result()->fetch_assoc();

        if ($result['total'] > 0) {
            die("❌ Error: No puedes eliminar un producto con compras registradas.");
        }
        $sqlEliminarProducto = "DELETE FROM producto WHERE id = ?";
        $stmtProducto = $this->connection->prepare($sqlEliminarProducto);
        $stmtProducto->bind_param("i", $id);
        return $stmtProducto->execute();
    }
}