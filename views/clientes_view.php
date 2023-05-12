<?php require "layouts/header.php"?>
<h1 class="text-center">Listado de clientes</h1>
<?php foreach ($clientes as $cliente) : ?>
<div class="card">
    <div class="card-header">
        <p class="card-text"><?php echo $cliente['id_cliente']?></p>
    </div>
    <div class="card-body">
        <h5 class="card-title">Nombre: <?php echo $cliente['nombre']?></h5>
        <p class="card-text">Fecha de Alta: <?php echo $cliente['fecha_alta']?></p>
        <p class="card-text">Club Vip:
            <?php  echo $cliente['club_vip'] ? 'Yes' : 'No'?>
        </p>
        <p class="card-text">Numero de pedidos: <?php echo $cliente['numero_pedidos']?></p>
<!--        <a href="--><?php //echo URLSITE?><!--/?page=vermensajes&idtema=--><?php //echo $cliente['idcliente']?><!--" class="btn btn-primary">IR A TEMA</a>-->
    </div>
    <?php endforeach; ?>
</div>
<?php require "layouts/footer.php"?>
