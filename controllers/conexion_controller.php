<?php
function conexion() {
    require_once 'models/conexion_model.php';
    $db = new conexion_model();
    return $db;
}
