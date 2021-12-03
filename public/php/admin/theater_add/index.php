<?php
$controller = new controller();
$tbl_theater = $controller->getModel("tbl_theater");

if (isset($_POST['addItemTheater']) && $_POST['addItemTheater']=="add") {
    insertTheater($tbl_theater);
    header("Location: ".CURLINK);
    exit;
}
function insertTheater($tbl_theater)
{
    $id_location = $_POST['id_location'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $id_theater = $tbl_theater->insertTheater($id_location,$address,$phone);

}

