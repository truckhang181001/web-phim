<?php
class booking extends Controller
{
    function __construct()
    {
        $isErr = false;
        if (isset($_GET['showtime'])) {
            $itemShowtime = $this->getModel("tbl_showtime")->getShowtime("id=" . $_GET['showtime']);
            if ($itemShowtime != null) {
                $dataSchedule = $this->getModel("tbl_schedule")->GetSchedule("id=" . $itemShowtime[0]->id_schedule)[0];
                $dataShowtime = $this->getModel("tbl_showtime")->getShowtime("id_schedule=" . $dataSchedule->id);
                $dataRoom = $this->getModel("tbl_room")->getRoom('id=' . $itemShowtime[0]->id_room)[0];
                $dataSeat = $this->getModel("tbl_seat")->getSeat('id_room=' . $dataRoom->id);
                $dataReceipt = $this->getModel("tbl_receipt")->getSeat($_GET['showtime']);
                $this->getView("booking_page", [
                    "room" => $dataRoom,
                    "seat" => $dataSeat,
                    "schedule" => $dataSchedule,
                    "showtime"=>$dataShowtime,
                    "itemShowtime"=>$itemShowtime[0],
                    "receipt"=>$dataReceipt
                ]);
                $isErr = true;
            }
        }
        $isErr==false?$this->getView("error404"):null;
    }
}
