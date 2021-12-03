<?php
$checkRand = rand(10,100000);
$controller = new controller();
$tbl_showtime = $controller->getModel("tbl_showtime");

if (isset($_POST['addItemShowtime']) && $_POST['addItemShowtime']=="add") {
    insertShowtime($tbl_showtime);
    header("Location: ".CURLINK);
    exit;
}
function insertShowtime($tbl_showtime){
    $id_schedule = $_POST['id_schedule'];
    $type = $_POST['type'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    
    $id_showtime = $tbl_showtime->insertShowtime($id_schedule, $type, $start_time, $end_time);
   
}