<?php
require_once "Connection.php"; 

class Categoria extends Connection { 
    public function __construct() {
        $this->connect();
    }

    public function obtenerCategorias() {
        $sql = "SELECT * FROM categoria";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function agregarCategoria($nombre) {
        $sql = "INSERT INTO categoria (nombre) VALUES (?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("s", $nombre);
        return $stmt->execute();
    }
}