<?php
require "controllers/conexion_controller.php";

class register_ropa_model {

    private $_db;

    public function __construct(){
        $this->_db = conexion();
    }

    public function register($nombre, $code, $fechalta, $precio, $stock) {
        $this->_db->conectar();
        $r = $this->_db->conexion->prepare("INSERT INTO ROPA(NOMBRE,CODE,FECHA_ALTA,PRECIO,HAY_STOCK)
                                            VALUES ('".$nombre."','".$code."','".$fechalta."','".$precio."','".$stock."')");
        $r->execute();
        $this->_db->desconectar();
        if ($r->fetch(PDO::FETCH_OBJ))
            return true;
        else
            return false;
    }
}
