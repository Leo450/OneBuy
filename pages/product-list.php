<?php include 'data/products.php' ?>

<div class="row">
    <?php foreach($products as $key => $product){ ?>
        <div class="col-lg-3">
            <?php include 'templates/product-list/widget-product.php' ?>
        </div>
        <?php if(($key + 1)%4 == 0){ ?>
            <span class="clear"></span>
        <?php } ?>
    <?php } ?>
</div>