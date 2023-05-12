<?php
require "controllers/conexion_controller.php";

class cliente_model {
    private $_db;
    public function __construct() {
        $this->_db = conexion();
    }

    public function verClientes() {
        $this->_db->conectar();
        $r = $this->_db->conexion->query("SELECT * FROM CLIENTE");
        $this->_db->desconectar();
        $clientes = array();
        while ($cliente = $r->fetch())
            $clientes[] = $cliente;
        return $clientes;
    }
}
