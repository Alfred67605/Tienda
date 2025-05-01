<?php
require_once '../models/Cliente.php';

class ClienteController {
    private $clienteModel;

    public function __construct() {
        $this->clienteModel = new Cliente();
    }

    public function obtenerClientes() {
        return $this->clienteModel->obtenerClientes();
    }

    public function obtenerClientePorID($id) {
        return $this->clienteModel->obtenerClientePorID($id);
    }

    public function agregarCliente($nombre, $correo, $telefono, $direccion) {
        return $this->clienteModel->agregarCliente($nombre, $correo, $telefono, $direccion);
    }

    public function actualizarCliente($id, $nombre, $correo, $telefono, $direccion) {
        return $this->clienteModel->actualizarCliente($id, $nombre, $correo, $telefono, $direccion);
    }

    public function eliminarCliente($id) {
        return $this->clienteModel->eliminarCliente($id);
    }
}