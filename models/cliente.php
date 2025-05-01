<?php
require_once "Connection.php";

class Cliente extends Connection {
    public function __construct() {
        $this->connect();
    }

    public function obtenerClientes() {
        $sql = "SELECT * FROM cliente";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function obtenerClientePorID($id) {
        $sql = "SELECT * FROM cliente WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return ($result->num_rows > 0) ? $result->fetch_assoc() : null;
    }
    public function agregarCliente($nombre, $correo, $telefono, $direccion) {

        $sqlCheck = "SELECT id FROM cliente WHERE correo = ?";
        $stmtCheck = $this->connection->prepare($sqlCheck);
        $stmtCheck->bind_param("s", $correo);
        $stmtCheck->execute();
        $result = $stmtCheck->get_result();

        if ($result->num_rows > 0) {
            die("❌ Error: Este correo ya está registrado. Usa otro correo.");
        }

        $sql = "INSERT INTO cliente (nombre, correo, telefono, direccion) VALUES (?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("ssss", $nombre, $correo, $telefono, $direccion);
        $stmt->execute();
        return $stmt->insert_id; 
    }

    public function actualizarCliente($id, $nombre, $correo, $telefono, $direccion) {
        $sql = "UPDATE cliente SET nombre = ?, correo = ?, telefono = ?, direccion = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("ssssi", $nombre, $correo, $telefono, $direccion, $id);
        return $stmt->execute();
    }

    
    public function eliminarCliente($id) {
        
        $sqlCheckCompras = "SELECT COUNT(*) AS total FROM compra WHERE cliente_id = ?";
        $stmtCheck = $this->connection->prepare($sqlCheckCompras);
        $stmtCheck->bind_param("i", $id);
        $stmtCheck->execute();
        $result = $stmtCheck->get_result()->fetch_assoc();

        if ($result['total'] > 0) {
            die("❌ Error: No puedes eliminar un cliente con compras registradas.");
        }

        $sqlEliminarCliente = "DELETE FROM cliente WHERE id = ?";
        $stmtCliente = $this->connection->prepare($sqlEliminarCliente);
        $stmtCliente->bind_param("i", $id);
        return $stmtCliente->execute();
    }
}