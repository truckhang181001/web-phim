<?php
$controller = new controller();
$tbl_film = $controller->getModel("tbl_film");
$tbl_image = $controller->getModel("tbl_image");

if(isset($_POST['deleteItem'])){
    $tbl_film->deleteFilm($_POST['deleteItem']);
    $itemImg = $tbl_image->getImage('id_film='.$_POST['deleteItem']);
    if($itemImg != null){
        foreach($itemImg as $item){
            if(is_file("./public/img/".$item->name)){
                unlink("./public/img/".$item->name);
            }
        }
    }
    //Clear img on DB
    $tbl_image->deleteImage('id_film='.$_POST['deleteItem']);
    // Clear POST
    header("Location: ".CURLINK);
    exit;
}