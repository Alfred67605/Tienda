<?php
class Connection {
    protected $connection = null;
    private $host = "localhost";
    private $user = "root";
    private $password = "root";
    private $db = "tienda";
    private $port = 3306;

    // Método de conexión a la base de datos
    public function connect() {
        try {
            $this->connection = new mysqli($this->host, $this->user, $this->password, $this->db, $this->port);
            
            if ($this->connection->connect_error) {
                throw new Exception("Error de conexión: " . $this->connection->connect_error);
            }

            return $this->connection;

        } catch (Exception $e) {
            die("Conexión fallida: " . $e->getMessage());
        }
    }
}