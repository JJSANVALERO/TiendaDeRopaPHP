<?php
require "models/register_ropa_model.php";

class register_ropa_controler {

    public static function register($nombre, $code, $fechalta, $precio, $stock) {
        $_model = new register_ropa_model();
        $_nombre = $nombre;
        $_code = $code;
        $_fechalta = $fechalta;
        $_precio = $precio;
        $_stock = $stock;

        $_model->register($_nombre,$_code,$_fechalta,$_precio,$_stock);
        $registroCorrecto = "Prenda registrada correctamente";
        header('location:' . URLSITE . "/?page=register&registrado=" . $registroCorrecto);
    }

    public static function validacion() {
        $nombre = trim($_POST['txtnombre']);
        $code = trim($_POST['txtcode']);
        $fechalta = date(trim($_POST['txtfechalta']));
        $precio = trim($_POST['txtprecio']);
        $stock = isset($_POST['stock']) && $_POST['stock'] == 'on' ? 1 : 0;

        self::register($nombre,$code,$fechalta,$precio,$stock);

    }
}
