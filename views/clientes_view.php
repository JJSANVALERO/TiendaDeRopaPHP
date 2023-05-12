<?php require "layouts/header.php"?>
<h1 class="text-center">Listado de clientes</h1>
<?php foreach ($clientes as $cliente) : ?>
<div class="card">
    <div class="card-header">
        <p class="card-text"><?php echo $cliente['id_cliente']?></p>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $cliente['nombre']?></h5>
        <p class="card-text"><?php echo $cliente['fecha_alta']?></p>
        <p class="card-text"><?php echo $cliente['club_vip']?></p>
        <p class="card-text"><?php echo $cliente['numero_pedidos']?></p>
<!--        <a href="--><?php //echo URLSITE?><!--/?page=vermensajes&idtema=--><?php //echo $cliente['idcliente']?><!--" class="btn btn-primary">IR A TEMA</a>-->
    </div>
    <?php endforeach; ?>
</div>
<?php require "layouts/footer.php"?>
