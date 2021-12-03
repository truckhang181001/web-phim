<?php
$controller = new controller();
$tbl_category = $controller->getModel("tbl_category");

if (isset($_POST['editItemCategory'])) {
    updateCategory($tbl_category);
    header("Location: ".CURLINK);
    exit;
}
function updateCategory($tbl_category)
{
    $name = $_POST['name'];
   $tbl_category->updateCategory($_POST['editItemCategory'],$name);
}