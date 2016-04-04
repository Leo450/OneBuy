<?php include 'data/products.php' ?>

<div class="product-frame widget-gradient-frame">
    <div class="h-lines"></div>
    <div class="v-lines"></div>
    <img src="<?php echo $products[0]['img'] ?>"/>
    <h3 class="product-name">
        <?php echo $products[0]['name'] ?>
    </h3>
    <div class="product-price">
        <?php echo $products[0]['price'] ?> RP
    </div>
    <a href="#" class="product-buy-button">
        <i class="fa fa-cart-arrow-down"></i>
    </a>
</div>
<div class="product-description">
    <p><?php echo $products[0]['description'] ?></p>
</div>