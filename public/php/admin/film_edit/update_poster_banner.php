<?php
if (isset($_POST['changePoster'])) updateImg($_POST['changePoster'], $_POST['nameFilm'], $_POST['nameImg'],'poster');
if (isset($_POST['changeBanner'])) updateImg($_POST['changeBanner'], $_POST['nameFilm'], $_POST['nameImg'],'banner');

function updateImg($id_film, $nameFilm, $nameImg,$type)
{
    $controller = new controller();
    $tbl_image = $controller->getModel("tbl_image");
    // Delete previous file
    $tbl_image->deleteImage("id_film=" . $id_film . " AND type='$type'");
    if (is_file("./public/img/" . $nameImg)) {
        unlink("./public/img/" . $nameImg);
    }
    // Insert new file
    uploadImage($id_film, $nameFilm, $type, 'img');
    header("Location: " . CURLINK);
    exit;
}
