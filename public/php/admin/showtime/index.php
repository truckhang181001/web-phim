<?php
$controller = new controller();
$tbl_showtime = $controller->getModel("tbl_showtime");   
if (isset($_POST['deleteItemShowtime'])) {
    deleteShowtime($tbl_showtime);
    header("Location: ".CURLINK);
    exit;
}
function deleteShowtime($tbl_showtime)
{
    $id=$_POST['deleteItemShowtime'];
   $tbl_showtime->deleteShowtime($id);
}
?>