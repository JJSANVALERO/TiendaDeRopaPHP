<?php
require "views/layouts/header.php";
?>
<div id="container">
    <h1 class="text-center">Register Clothes</h1>
    <div class="row justify-content-center">
        <div class = "col-sm-4 mt-5 mb-5 pd-2">
            <form action="<?php echo URLSITE ?>/?page=registerauth" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="txtnombre" placeholder="NAME">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="txtcode" placeholder="CODE">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="txtfechalta" placeholder="ENTRY DATE">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="txtprecio" placeholder="PRICE">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="checkbox" name="stock" value="on"><br>
                </div>
                <?php
                if (isset($_GET['errores'])) {
                    $errores = unserialize(trim($_GET['errores']));
                    ?>
                    <ul class="errores">
                        <?php
                        foreach ($errores as $error){
                            echo '<li style="color:red">' . $error . '</li>';
                        }
                        ?>
                    </ul>
                    <?php
                }
                ?>
                <?php
                if (isset($_GET['registrado'])) {
                    $registrado = trim($_GET['registrado'])
                    ?>
                    <ul class="registrado">
                        <?php
                        echo '<li style="color:lawngreen">' . $registrado . '</li>';
                        ?>
                    </ul>
                    <?php
                }
                ?>
                <input type="submit" value="REGISTER" class="btn btn-primary btn-block" name="btnregister">
            </form>
        </div>
    </div>
    <?php
    require "views/layouts/footer.php";
    ?>
