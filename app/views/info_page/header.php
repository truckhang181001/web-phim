<!-- HEADER -->
<div class="info-page__header__banner">
    <img src="<?php echo PRONAME."./public/img/".$data['film'][0]->getImage("type='banner'")[0]->name?>" alt="Banner">
    <div class="info-page__header__poster-info">
        <p class="info-page__header__poster-info--name info-page--effect">
            <!------------ BINDING FILM NAME  ------------>
            <?php echo $data["film"][0]->name;?>
            <!------------------------------------------>
        </p>
        <button type="button" class="info-page__header__poster-info--brand col-6">
            <!------------ BINDING FILM  CATEGORY  ------------>
            <?php 
                echo $data['film'][0]->GetCate();
            ?>
            <!------------------------------------------>
        </button>
        <div class="info-page__header__poster-info--time">
            <div class="mr-3">
                <i class="far fa-calendar-alt"></i>
                <!------------ BINDING FILM DATE  ------------>
                <?php 
                    $date = date_create($data["film"][0]->release);
                    echo date_format($date,"d/m/Y");
                ?>
                <!------------------------------------------>
            </div>
            <div>
                <i class="far fa-clock "></i>
                <!------------ BINDING FILM TIME  ------------>
                <?php 
                    $time = $data["film"][0]->time;
                    echo FLOOR($time/60)." giờ ".($time%60)." phút" 
                ?>
                <!------------------------------------------>
            </div>
        </div>                       
    </div>
</div>

<div class="info-page__header__btn-group">
    <div class="info-page__header__btn-group--img" >
        <img class="info-page--effect" src="<?php 
        if(isset($data['poster']))
            echo PRONAME."/public/img/".$data['film'][0]->getImage("type='poster'")[0]->name;?>">
        <a class="info-page--fas-style" href="<?php echo $data['film'][0]->getImage("type='video'")[0]->name?>">
            <i class="fas fa-play info-page--fas-style__poster-icon"></i>
        </a>
    </div>                                     
    <div class="col-xl-8 col-12 info-page__header__btn-group__statistic">
        <div class="info-page__header__btn-group__statistic__ticket-number">
            <div><i class="fas fa-clipboard-list"></i> (1005)</div>
            <p class="col-12">Số vé bán</p>
        </div>
        <div class="info-page__header__btn-group__statistic__total-post">
            <div>
                <b class="">(5.0)</b>
                <i class="fas fa-star--style fa-star"></i>
                <i class="fas fa-star--style fa-star"></i>
                <i class="fas fa-star--style fa-star"></i>
                <i class="fas fa-star--style fa-star"></i>
                <i class="fas fa-star--style fa-star"></i>
            </div>
            <p>Đánh giá từ khách hàng</p>
        </div>
        <div class="info-page__header__btn-group__statistic__rate">
            <div>
                <i class="fas fa-star--style fa-star"></i>
                <i class="fas fa-star--style fa-star"></i>
                <i class="fas fa-star--style fa-star"></i>
                <i class="fas fa-star--style fa-star"></i>
                <i class="fas fa-star--style fa-star"></i>
            </div>
            <p>Chọn đánh giá</p>
        </div>
        <a href='<?php echo PRONAME."/lich-chieu"?>' class="info-page__header__btn-group__statistic--btnbook info-page--effect d-flex justify-content-center align-content-center">
            MUA VÉ
        </a>
     </div>
</div>            
<!-- HEADER -->