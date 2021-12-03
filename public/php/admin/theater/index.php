<?php
$controller = new controller();
$tbl_theater = $controller->getModel("tbl_theater");   
if (isset($_POST['deleteItemTheater'])) {
    deleteTheater($tbl_theater);
    header("Location: ".CURLINK);
    exit;
}
function deleteTheater($tbl_theater)
{
    $id=$_POST['deleteItemTheater'];
   $tbl_theater->deleteTheater($id);
}
?>