<?php
$controller = new controller();
$tbl_room = $controller->getModel("tbl_room");
$tbl_seat = $controller->getModel("tbl_seat");
if (isset($_POST['editRoom'])) {
    $id = $_POST['id'];
    $id_theater = $_POST['id_theater'];
    $name =  $_POST['name'];
    $seat_row = (int)$_POST['seat-row'];
    $seat_col = (int)$_POST['seat-col'];
    if (isset($_POST['seatType']))
        $seatType = $_POST['seatType'];

    $tbl_room->updateRoom($id, $id_theater, $name, $seat_row, $seat_col);
    $tbl_seat->deleteSeat($id);

    $alphabet = range("A", "Z");
    for ($i = 0; $i < $seat_row; $i++) {
        for ($j = 1; $j <= $seat_col; $j++) {
            $seatName = $alphabet[$i] . $j;
            in_array($seatName, $seatType) ? $checkType = 1 : $checkType = 0;
            $tbl_seat->insertSeat($id, $seatName, $checkType);
        }
    }
    header("Location: ".CURLINK);
    exit;
}
