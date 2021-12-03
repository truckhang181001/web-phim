<?php
$controller = new controller();
$tbl_schedule = $controller->getModel("tbl_schedule");

if (isset($_POST['editItemSchedule'])) {
    updateSchedule($tbl_schedule);
    header("Location: ".CURLINK);
    exit;
}
function updateSchedule($tbl_schedule)
{
    $id_film = $_POST['id_film'];
    $id_theater = $_POST['id_theater'];
    $id_room = $_POST['id_room'];
    $date = $_POST['date'];
   $tbl_schedule->updateSchedule($_POST['editItemSchedule'],$id_film, $id_theater, $id_room, $date);
}