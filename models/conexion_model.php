<?php
class conexion_model {
    public $conexion;

    public function conectar() {
        try {
            $dsn = "mysql:host=localhost;dbname=" . BD_NAME;
            $this->conexion = new PDO($dsn, BD_USER,BD_PASWORD);
            return $this->conexion;
        } catch (PDOException $e) {
            echo $e ->getMessage();
        }
    }

    public function desconectar() {
        $this->conexion = null;
    }
}
