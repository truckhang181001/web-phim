<?php
$controller = new controller();
$tbl_category = $controller->getModel("tbl_category");

if (isset($_POST['addItemCategory']) && $_POST['addItemCategory']=="add") {
    insertCategory($tbl_category);
    header("Location: ".CURLINK);
    exit;
}
function insertCategory($tbl_category)
{
    $name = $_POST['name'];
    $id_category = $tbl_category->insertCategory($name);

}