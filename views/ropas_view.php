<?php require "layouts/header.php"?>
<h1 class="text-center">Listado de prendas de ropa</h1>
<?php foreach ($ropas as $ropa) : ?>
<div class="card">
    <div class="card-header">
        <p class="card-text"><?php echo $ropa['id_ropa']?></p>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $ropa['nombre']?></h5>
        <p class="card-text"><?php echo $ropa['code']?></p>
        <p class="card-text"><?php echo $ropa['fecha_alta']?></p>
        <p class="card-text"><?php echo $ropa['hay_stock']?></p>
        <p class="card-text"><?php echo $ropa['precio']?></p>
<!--        <a href="--><?php //echo URLSITE?><!--/?page=vermensajes&idtema=--><?php //echo $cliente['idcliente']?><!--" class="btn btn-primary">IR A TEMA</a>-->
    </div>
    <?php endforeach; ?>
</div>
<?php require "layouts/footer.php"?>
