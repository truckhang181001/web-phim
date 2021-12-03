 <!-- IMG-GROUP -->
<div class="info-page__img-group__text">
    <p>HÌNH ẢNH</p>
</div>

<!-- <div class="info-page__img-group__group row">
    <img class="col-xl-3 col-md-4 col-6 info-page__img-group__group--item info-page--effect" src="<?php echo PRONAME ?>/public/img/home-page-banner3.jpg">
    <img class="col-xl-3 col-md-4 col-6 info-page__img-group__group--item info-page--effect" src="<?php echo PRONAME ?>/public/img/home-page-banner1.jpg">
    <img class="col-xl-3 col-md-4 col-6 info-page__img-group__group--item info-page--effect" src="<?php echo PRONAME ?>/public/img/home-page-banner2.jpg">
    <img class="col-xl-3 col-md-4 col-6 info-page__img-group__group--item info-page--effect" src="<?php echo PRONAME ?>/public/img/home-page-banner2.jpg">
    <img class="col-xl-3 col-md-4 col-6 info-page__img-group__group--item info-page--effect" src="<?php echo PRONAME ?>/public/img/home-page-banner3.jpg">
</div> -->
<div class="owl-carousel owl-custom owl-theme mt-3 mb-3">
    <?php
        foreach($data['film'][0]->getImage("type='detail'") as $item){
            echo "
            <div class='banner-item item'>
                <img src='".PRONAME."/public/img/".$item->name."' alt='Thumb' class='banner__img'>
            </div>";
        }
    ?>
</div>
    <!-- IMG-GROUP -->