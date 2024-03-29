<?php require "layouts/header.php"?>
<h1 class="text-center">Clothing List</h1>
<?php foreach ($ropas as $ropa) : ?>
<div class="card">
    <div class="card-header">
        <p class="card-text"><?php echo $ropa['id_ropa']?></p>
    </div>
    <div class="card-body">
        <h5 class="card-title">Name: <?php echo $ropa['nombre']?></h5>
        <p class="card-text">Code: <?php echo $ropa['code']?></p>
        <p class="card-text">Entry date: <?php echo $ropa['fecha_alta']?></p>
        <p class="card-text">Stock: <?php echo $ropa['hay_stock'] ? 'Yes' : 'No'?></p>
        <p class="card-text">Price: <?php echo $ropa['precio']?></p>
        <a href="<?php echo URLSITE?>/?page=deleteropa&id_ropa=<?php echo $ropa['id_ropa']?>" class="btn btn-primary">Delete</a>
    </div>
    <?php endforeach; ?>
</div>
<?php require "layouts/footer.php"?>
