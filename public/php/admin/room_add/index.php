<?php
$controller = new controller();
$tbl_room = $controller->getModel("tbl_room");
$tbl_seat = $controller->getModel("tbl_seat");
if (isset($_POST['addItemSeat']) && $_POST['addItemSeat'] == "add") {
    $id_theater = $_POST['id_theater'];
    $name = $_POST['name'];
    $seat_col = (int)$_POST['seat-col'];
    $seat_row = (int)$_POST['seat-row'];
    if (isset($_POST['seatType']))
        $seatType = $_POST['seatType'];

    //Insert Room
    $id_room = $tbl_room->insertRoom($id_theater, $name, $seat_col, $seat_row);
    //Insert Seat
    $alphabet = range("A", "Z");
    for ($i = 0; $i < $seat_row; $i++) {
        for ($j = 1; $j <= $seat_col; $j++) {
            $seatName = $alphabet[$i] . $j;
            in_array($seatName, $seatType)?$checkType=1:$checkType=0;
            $tbl_seat->insertSeat($id_room, $seatName, $checkType);
        }
    }
    header("Location: ".CURLINK);
    exit;
}