<?php
if(isset($_POST['changeVideo'])){
    $controller = new controller();
    $tbl_image = $controller->getModel("tbl_image");
    $tbl_image->updateImage($_POST['idVideo'],$_POST['video']);
    header("Location: " . CURLINK);
    exit;
}