    <?php
        include_once __DIR__ . "/carousel.php";
        include_once __DIR__ . "/title.php";
    ?>
    
    <div class="container-fluid">
        <?php include_once __DIR__ . "/banner-ads.php" ?>
    </div>
    <div class="container">
        <?php //include_once __DIR__ . "/search.php" ?>
        <div class="film-slide">
            <div class="row">
                <?php echo titleFilm("Phim đang chiếu","Hãy chắc chắn bạn không bỏ lỡ những bộ phim ngày hôm nay")?>
            </div>
            <?php echo owlCarousel($data['film']);?>
        </div>
        <div class="film-slide">
            <div class="row">
                <?php echo titleFilm("Phim sắp chiếu","Hãy chắc chắn bạn không bỏ lỡ những bộ sắp tới")?>
            </div>
            <?php echo owlCarousel($data['filmFtu']);?>
        </div>
        <div class="event-slide">
            <?php include_once __DIR__ . "/event-ads.php" ?>
        </div>
    </div>
    <script src="<?php echo PRONAME ?>/public/js/app/home_page/script.js"></script>