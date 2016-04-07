<?php include 'data/goods.php' ?>

<div class="row">
    <?php foreach($goods as $key => $good){ ?>
        <div class="col-lg-3">
            <?php include 'templates/good-list/widget-good.php' ?>
        </div>
        <?php if(($key + 1)%4 == 0){ ?>
            <span class="clear"></span>
        <?php } ?>
    <?php } ?>
</div>