<?php
switch ($url) {
    case "edit": {
            if (isset($_GET['id'])) {
                $dataSchedule = $this->getModel("tbl_schedule")->GetSchedule('id='.$_GET['id'])[0];
                $itemFilm = $this->getModel("tbl_film")->getFilm('id='.$dataSchedule->id_film)[0];
                $dataFilm = $this->getModel("tbl_film")->getFilm();
                $dataTheater = $this->getModel("tbl_theater")->getTheater();
                $dataRoom = $this->getModel("tbl_room")->getRoom("id_theater=$dataSchedule->id_theater"); 
                $dataShowtime = $this->getModel("tbl_showtime")->getShowtime('id_schedule='.$_GET['id']);
                $this->getViewAd("schedule_edit", [
                    "schedule" => $dataSchedule,
                    "film" => $dataFilm,
                    "theater" => $dataTheater,
                    "room" => $dataRoom,
                    "showtime"=>$dataShowtime,
                    "item_film" =>$itemFilm,
                ]);
            };
            break;
        }
    case "add": {
        $dataFilm = $this->getModel("tbl_film")->getFilm();
        $dataTheater = $this->getModel("tbl_theater")->getTheater();
        $dataRoom = $this->getModel("tbl_room")->getRoom();
        
        $this->getViewAd("schedule_add", [            
            "film" => $dataFilm,
            "theater" => $dataTheater,
            "room" => $dataRoom
        ]);
            break;
        }
    default:
        scheduleDefault($this);
}

function scheduleDefault($subClass)
{
    $dataSchedule = $subClass->getModel("tbl_schedule")->GetSchedule();
    $subClass->getViewAd("schedule", $dataSchedule);
}