<div class="booking-page__banner">
    <div class="film-info">
        <div class="film-info__name">
            <?php echo $data['schedule']->getFilm()->name?>
        </div>
        <div class="film-info__detail">
            <?php
             echo $data['schedule']->getTheater()->address." | ".$data['itemShowtime']->type;
             ?>
        </div>
    </div>
    <img src="<?php echo PRONAME ?>/public/img/banner04.jpg" alt="">
</div>