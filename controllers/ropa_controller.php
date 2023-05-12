<?php
require "models/ropa_model.php";

class ropa_controller {

    public static function verropa() {
        $_modelo = new ropa_model();
        $ropas = $_modelo->verRopas();
        include 'views/ropas_view.php';
    }
}