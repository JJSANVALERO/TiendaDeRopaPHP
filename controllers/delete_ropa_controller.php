<?php
require "models/delete_ropa_model.php";

class delete_ropa_controller {

    public static function deleteropa($id_ropa) {
        $_model = new delete_ropa_model();
        $_model->deleteropa($id_ropa);
    }
}
