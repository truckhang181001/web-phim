    <section class="booking-page">
        <?php require_once __DIR__ . "/banner.php" ?>
        <?php require_once __DIR__ . "/filter.php" ?>
        <form action="<?php echo PRONAME;?>/thanh-toan" method="get">
            <div class="booking-page__seat">
                <div class="seat-container">
                    <?php require_once __DIR__ . "/seat.php" ?>
                </div>
            </div>
            <input type="hidden" name='showtime' value="<?php echo $data['itemShowtime']->id;?>">
            <div class="booking-page__checkout">
                <button type="submit" class="btnf">THANH TOÁN</button>
            </div>
        </form>
    </section>