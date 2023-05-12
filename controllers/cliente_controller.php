<?php
require "models/cliente_model.php";

class cliente_controller {

    public static function verclientes(){
        $_modelo = new cliente_model();
        $clientes = $_modelo->verClientes();
        include 'views/clientes_view.php';
    }
}
