<div class="user-pannel">
    <div class="v-align-outer">
        <div class="v-align-inner">

            <?php if(!$logged){ ?>

                <a href="#" class="user-pannel-link">
                    <div class="round-icon">
                        <div class="v-align-outer">
                            <div class="v-align-inner">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                    </div>
                    <p>Se connecter / S'inscrire</p>
                </a>

            <?php }else{ ?>

                <a href="#" class="user-pannel-link">
                    <div class="round-icon">
                        <div class="v-align-outer">
                            <div class="v-align-inner">
                                <i class="fa fa-dollar"></i>
                            </div>
                        </div>
                    </div>
                    <p>Vendre un bien</p>
                </a>
                <span href="#" class="user-pannel-link user-pannel-link-settings">
                    <div class="round-icon">
                        <div class="v-align-outer">
                            <div class="v-align-inner">
                                <i class="fa fa-gears"></i>
                            </div>
                        </div>
                    </div>
                    <div class="user-pannel-tooltip">
                        <ul class="user-pannel-tooltip-menu">
                            <li>
                                <a href="#">My Account</a>
                            </li>
                            <li>
                                <a href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </span>

            <?php } ?>

        </div>
    </div>
</div>

<script type="text/javascript">
    var isMouseover = false,
        link = document.getElementsByClassName('user-pannel-link-settings')[0],
        tooltip = document.getElementsByClassName('user-pannel-tooltip')[0];

    link.addEventListener('mouseenter', function(){
        isMouseover = true;
        tooltip.style.display = 'block';
    });
    link.addEventListener('mouseleave', function(){
        isMouseover = false;
        setTimeout(function(){
            if(!isMouseover)
                tooltip.style.display = 'none';
        }, 500);
    });
</script>