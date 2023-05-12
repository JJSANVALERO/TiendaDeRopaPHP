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

    default: 'menu';
        break;
}