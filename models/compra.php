<?php
require_once "Connection.php";

class Compra extends Connection {
    public function __construct() {
        $this->connect();
    }

    
    public function registrarCompra($cliente_id, $producto_id, $cantidad) {
        $sql = "INSERT INTO compra (cliente_id, producto_id, cantidad, fecha) VALUES (?, ?, ?, NOW())";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("iii", $cliente_id, $producto_id, $cantidad);
        return $stmt->execute();
    }

    public function obtenerCompras() {
        $sql = "SELECT c.nombre AS cliente, p.nombre AS producto, co.cantidad, co.fecha 
                FROM compra co
                INNER JOIN cliente c ON co.cliente_id = c.id
                INNER JOIN producto p ON co.producto_id = p.id
                ORDER BY co.fecha DESC";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}