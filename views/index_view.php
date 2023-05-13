<?php require "views/layouts/header.php" ?>
<main>
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="public/img/logo.jfif" alt="" width="225" height="225">
        <h1 class="display-5 fw-bold text-body-emphasis">Clothing Store</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Clothing Store Listings</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3" onclick="location.href='<?php echo URLSITE ?>?page=verclientes'">Customer List</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick="location.href='<?php echo URLSITE ?>?page=verropas'">Clothing List</button>
            </div>
        </div>
    </div>
</main>
<?php require "views/layouts/footer.php" ?>
