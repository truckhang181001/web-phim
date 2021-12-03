<?php
switch ($url) {
    case "edit": {
            if (isset($_GET['id'])) {
                $dataRoom = $this->getModel("tbl_room")->getRoom($_GET['id'])[0];
                $dataTheater = $this->getModel("tbl_theater")->getTheater();
                $this->getViewAd("room_edit", [
                    "theater" => $dataTheater,
                    "room" => $dataRoom,
                ]);
            };
            break;
        }
    case "add": {
            $dataTheater = $this->getModel("tbl_theater")->getTheater();
            $this->getViewAd("room_add", ["theater" => $dataTheater]);
            break;
        }
    default:
        roomDefault($this);
}

function roomDefault($subClass)
{
    $dataRoom = $subClass->getModel("tbl_room")->getRoom();
    $subClass->getViewAd("room", $dataRoom);
}
