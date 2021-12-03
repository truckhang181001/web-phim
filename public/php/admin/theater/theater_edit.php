<?php
$controller = new controller();
$tbl_theater = $controller->getModel("tbl_theater");

if (isset($_POST['editItemTheater'])) {
    updateTheater($tbl_theater);
    header("Location: ".CURLINK);
    exit;
}
function updateTheater($tbl_theater)
{
    $id_location = $_POST['id_location'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
   $tbl_theater->updateTheater($_POST['editItemTheater'],$id_location,$address,$phone);
}