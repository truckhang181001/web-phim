<?php
$controller = new controller();
$tbl_showtime = $controller->getModel("tbl_showtime");

if (isset($_POST['editItemShowtime'])) {
    updateShowtime($tbl_showtime);
    header("Location: ".CURLINK);
    exit;
}
function updateShowtime($tbl_showtime)
{
    $id_schedule = $_POST['id_schedule'];
    $type = $_POST['type'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

   
    $tbl_showtime->updateShowtime($_POST['editItemShowtime'],$id_schedule, $type, $start_time, $end_time);
}