<?php
require "controllers/conexion_controller.php";

class ropa_model {

    private $_db;
    public function __construct() {
        $this->_db = conexion();
    }

    public function verRopas() {
        $this->_db->conectar();
        $r = $this->_db->conexion->query("SELECT * FROM ROPA");
        $this->_db->desconectar();
        $ropas = array();
        while ($ropa = $r->fetch())
            $ropas[] = $ropa;
        return $ropas;
    }
}
