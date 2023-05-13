<?php
require "controllers/conexion_controller.php";

class delete_ropa_model {

    private $_db;

    public function __construct(){
        $this->_db = conexion();
    }

    public function deleteropa($id_ropa) {
        $this->_db->conectar();
        $r = $this->_db->conexion->prepare("DELETE FROM ROPA WHERE id_ropa = '$id_ropa'");
        $r->execute();
        header("location:" . URLSITE . "/?page=verropas");
    }






}

