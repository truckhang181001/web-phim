<?php
$controller = new controller();
$tbl_room = $controller->getModel("tbl_room");
$tbl_seat = $controller->getModel("tbl_seat");
if (isset($_POST['deleteRoom'])) {
    $id = $_POST['deleteRoom'];
    $tbl_room->deleteRoom($id);
    $tbl_seat->deleteSeat($id);
    header("Location: ".CURLINK);
    exit;
}
