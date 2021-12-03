<?php
$controller = new controller();
$tbl_category = $controller->getModel("tbl_category");   
if (isset($_POST['deleteItemCategory'])) {
    deleteCategory($tbl_category);
    header("Location: ".CURLINK);
    exit;
}
function deleteCategory($tbl_category)
{
    $id=$_POST['deleteItemCategory'];
   $tbl_category->deleteCategory($id);
}
?>