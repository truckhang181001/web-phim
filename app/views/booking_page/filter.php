<form method="get" class="booking-page__form" action="">
    <div class="showtime">
        <div class="showtime__date"> <?php echo date("l d/m/Y",strtotime($data['schedule']->date)) ?></div>
        <select class="showtime__box" name="showtime" onchange="this.form.submit()">
            <?php
                foreach($data['showtime'] as $item){
                    if($item->id == $_GET['showtime']){
                        echo "<option value='$item->id' selected>$item->start_time</option>";
                    }
                    else echo "<option value='$item->id'>$item->start_time</option>";
                }
            ?>
        </select>
    </div>
</form>