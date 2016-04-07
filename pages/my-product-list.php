<?php include 'data/goods.php' ?>

<div class="good-table widget-gradient-frame">
    <div class="h-lines"></div>
    <div class="v-lines"></div>
    <div class="widget-gradient-frame-window top-left">
        My goods
    </div>
    <a href="#" class="widget-gradient-frame-window top-right-out link-add-good">
        <i class="fa fa-plus toggle-icon"></i>
    </a>

    <div class="good-table-rows" style="display:block;opacity:1;">
        <?php foreach($goods as $key => $good){ ?>
            <div class="good-table-row">
                <div class="row">
                    <div class="col-lg-4">
                        <?php echo $good['name']; ?>
                    </div>
                    <div class="col-lg-4">
                        <?php echo $good['price']; ?> RP
                    </div>
                    <div class="col-lg-4">
                        <i class="fa fa-<?php if($good['strategy_id'] == 1){ echo 'legal'; }else{ echo 'sign-in'; } ?>"></i>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="good-table-form" style="display:none;opacity:0;">
        <form action="">
            <div class="form-group-hidden">
                <input type="radio" class="form-input-radio" name="strategy_id" value="1"/>
                <input type="radio" class="form-input-radio" name="strategy_id" value="2"/>
            </div>

            <h2 class="form-title">
                <span class="form-title-wrap">
                    Add good
                </span>
            </h2>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-3 form-group-button">
                    <div class="button form-input-radio-placeholder" radio-name="strategy_id" radio-value="1">
                        Auction selling&nbsp;&nbsp;&nbsp;<i class="fa fa-legal"></i>
                    </div>
                </div>
                <div class="col-lg-3 form-group-button">
                    <div class="button form-input-radio-placeholder" radio-name="strategy_id" radio-value="2">
                        Direct selling&nbsp;&nbsp;&nbsp;<i class="fa fa-level-down"></i>
                    </div>
                </div>
            </div>
            <div class="form-group form-group-hidden form-group-date">
                <br/>
                <label for="end_date">
                    <i class="fa fa-angle-right"></i>
                    Auction end date
                </label>
                <input type="date" name="end_date"/>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class="col-lg-4 form-group">
                    <input type="text" name="name" placeholder="Name"/>
                </div>
                <div class="col-lg-4 form-group">
                    <input type="number" name="price" placeholder="Price"/>
                </div>
                <div class="col-lg-4 form-group">
                    <div class="form-group-file">
                        <div class="form-input-file-overlay button">
                            <div class="v-align-outer">
                                <div class="v-align-inner">
                                    Click here to choose an image
                                </div>
                            </div>
                        </div>
                        <input type="file"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <textarea name="description" cols="30" rows="10">Description</textarea>
            </div>
            <button class="button">Send</button>
            <span class="clear"></span>
        </form>
    </div>

</div>

<script type="text/javascript">

    /* TOGGLE good TABLE PANNEL */

    function fadeOut(element, callback){
        isAnimationRunning = true;

        element.style.opacity = 0;

        setTimeout(function(){
            element.style.display = 'none';

            isAnimationRunning = false;

            if(callback)
                callback();
        }, 500);
    }
    function fadeIn(element, callback){
        isAnimationRunning = true;

        element.style.display = 'block';

        setTimeout(function(){
            element.style.opacity = 1;

            setTimeout(function(){
                isAnimationRunning = false;

                if(callback)
                    callback();
            }, 500);
        }, 50);
    }

    var isAnimationRunning = false,
        linkAddGood = document.getElementsByClassName('link-add-good')[0],
        goodTableRows = document.getElementsByClassName('good-table-rows')[0],
        goodTableForm = document.getElementsByClassName('good-table-form')[0],
        icon = document.getElementsByClassName('toggle-icon')[0];

    linkAddGood.addEventListener('click', function(){
        if(isAnimationRunning)
            return;

        if(goodTableRows.style.display == 'block'){
            icon.className = icon.className.replace('plus', 'bars');
            fadeOut(goodTableRows, function(){
                fadeIn(goodTableForm);
            });

        }else{
            icon.className = icon.className.replace('bars', 'plus');
            fadeOut(goodTableForm, function(){
                fadeIn(goodTableRows);
            });
        }
    });
</script>
<script type="text/javascript">

    /* INPUT RADIO PLACEHOLDER */

    function checkRadioWithValue(value, checkState){
        checkState = (checkState !== undefined)? checkState : true;

        for(var k = 0; k < formInputRadios.length; k++){
            if(formInputRadios[k].attributes['value'].value == value)
                formInputRadios[k].checked = checkState;
        }
    }

    var formInputRadioPlaceholders = document.getElementsByClassName('form-input-radio-placeholder'),
        formInputRadios = document.getElementsByClassName('form-input-radio'),
        formGroupDate = document.getElementsByClassName('form-group-date')[0];

    for(var i = 0; i < formInputRadioPlaceholders.length; i++){
        formInputRadioPlaceholders[i].addEventListener('click', function(){
            var placeholderRadioValue = this.attributes['radio-value'].value;

            if(this.className.indexOf('active') === -1){
                for(var j = 0; j < formInputRadioPlaceholders.length; j++)
                    formInputRadioPlaceholders[j].className = formInputRadioPlaceholders[j].className.replace(' active', '');

                this.className += ' active';

                checkRadioWithValue(placeholderRadioValue);

            }else{
                this.className = this.className.replace(' active', '');

                checkRadioWithValue(placeholderRadioValue, false);
            }

            if(placeholderRadioValue == 1 && this.className.indexOf('active') !== -1)
                formGroupDate.style.display = 'block';
            else
                formGroupDate.style.display = 'none';
        });
    }
</script>