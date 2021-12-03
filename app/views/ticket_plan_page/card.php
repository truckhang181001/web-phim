    <?php
    function showTime($item)
    {
        $a = "";
        if($item->GetShowTime("AND start_time >= '".date("H:i:s")."'") != null){
            foreach ($item->GetShowTime("AND start_time >= '".date("H:i:s")."'") as $showTime) {
                $a .= "
                        <a href='".PRONAME."/dat-ve?schedule=".$showTime->id_schedule."&showtime=".$showTime->id."' class='showtime-item'>
                            <div class='showtime-item__time'>
                                " . $showTime->start_time . "
                            </div>
                            <div class='showtime-item__seat'>
                                ".$showTime->getAvailableSeat()." ghế trống
                            </div>
                            " . typeShow($showTime->type) . "
                        </a>
                    ";
            }
        }
        return $a;
    }
    function typeShow($item)
    {
        if ($item != "2D") {
            return "
            <div class='showtime-item__type'>
                " . $item . "
            </div>";
        } else return "";
    }
    //Hàm xử lý trả về kết quả phim
    if(isset($data["schedule"])){
        foreach ($data["schedule"] as $item) {
            echo "<div class='film-card'>
                <div class='film-card__name'>" . $item->GetFilm()->name . "</div>
                <div class='film-card__showtime'>
                " . showTime($item) . "
                </div>
            </div>";
        }
    }
    ?>