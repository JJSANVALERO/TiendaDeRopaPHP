<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require "config.php";

$page = "menu";
if (isset($_GET['page']))
    $page = $_GET['page'];
switch ($page){
    case 'menu':
        require "views/index_view.php";
        break;
    case 'verclientes';
        require "controllers/cliente_controller.php";
        cliente_controller::verclientes();
        break;
    case 'verropas';
        require "controllers/ropa_controller.php";
        ropa_controller::verropa();
        break;
    case 'register' :
        require "views/register_ropa.php";
        break;
    case 'registerauth' :
        require "controllers/register_ropa_controler.php";
        register_ropa_controler::validacion();
        break;
    case 'deleteropa' :
        $id_ropa = $_GET['id_ropa'];
        require "controllers/delete_ropa_controller.php";
        delete_ropa_controller::deleteropa($id_ropa);
        break;

    default: 'menu';
        break;
}