<?php
switch ($url) {
    case "edit": {
            if (isset($_GET['id'])) {
                $dataShowtime = $this->getModel("tbl_showtime")->getShowtime('id='.$_GET['id'])[0];
                $dataSchedule = $this->getModel("tbl_schedule")->GetSchedule();
                
                $this->getViewAd("showtime_edit", [
                    "showtime" => $dataShowtime,
                    "schedule" => $dataSchedule,
                    
                ]);
            };
            break;
        }
    case "add": {
            $dataSchedule = $this->getModel("tbl_schedule")->getSchedule();
            $this->getViewAd("showtime_add", ["schedule" => $dataSchedule]);
            break;
        }
    default:
        showtimeDefault($this);
}

function showtimeDefault($subClass)
{
    $dataShowtime = $subClass->getModel("tbl_showtime")->GetShowtime();
    $subClass->getViewAd("showtime", $dataShowtime);
}
