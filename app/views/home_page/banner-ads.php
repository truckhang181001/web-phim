<div class="owl-carousel banner-ads owl-theme owl-banner">
    <?php
        foreach($data['film'] as $item){
            echo "
            <div class='banner-item'>
                <img src='".PRONAME."/public/img/".$item->getImage("type='banner'")[0]->name."' alt='Thumb' class='banner__img'>
            </div>";
        }
    ?>
</div>