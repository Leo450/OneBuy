<?php include 'data/goods.php' ?>

<div class="good-frame widget-gradient-frame">
    <div class="h-lines"></div>
    <div class="v-lines"></div>
    <img src="<?php echo $goods[0]['img'] ?>"/>
    <h3 class="widget-gradient-frame-window top-left">
        <?php echo $goods[0]['name'] ?>
    </h3>
    <div class="widget-gradient-frame-window top-right">
        <?php echo $goods[0]['price'] ?> RP
    </div>
    <div class="widget-gradient-frame-window top-right-after">
        Auction selling <i class="fa fa-legal"></i>
        <br/>
        <br/>
        End: 18/12/2015
    </div>
    <a href="#" class="widget-gradient-frame-window top-right-out">
        <i class="fa fa-cart-arrow-down"></i>
    </a>
</div>
<div class="good-description">
    <p><?php echo $goods[0]['description'] ?></p>
</div>

<script type="text/javascript" src=""></script>