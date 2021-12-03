<?php
$controller = new controller();
$tbl_schedule = $controller->getModel("tbl_schedule");   
if (isset($_POST['deleteItemSchedule'])) {
    deleteSchedule($tbl_schedule);
    header("Location: ".CURLINK);
    exit;
}
function deleteSchedule($tbl_schedule)
{
    $id=$_POST['deleteItemSchedule'];
   $tbl_schedule->deleteSchedule($id);
}
?>