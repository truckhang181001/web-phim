<?php
require_once "./share/php/upload_img.php";

$controller = new controller();
$tbl_film = $controller->getModel("tbl_film");

if (isset($_POST['addItemFilm'])) {
    insertFilm($tbl_film);
    header("Location: " . CURLINK);
    exit;
}
function insertFilm($tbl_film)
{
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $id_category = $_POST['id_category'];
    $release = $_POST['release'];
    $time = $_POST['time'];
    $actor = $_POST['actor'];
    $director = $_POST['director'];
    $studio = $_POST['studio'];
    $type = $_POST['type'];
    $id_film = $tbl_film->insertFilm($name, $desc, $id_category, $release, $time, $actor, $director, $studio, $type);
    if ($id_film != null) {
        uploadImage($id_film, $name, "poster", "img");
        uploadImage($id_film, $name, "detail", "img");
        uploadImage($id_film,$name,'banner','img');
        if(isset($_POST['video'])){
            insertImage($id_film,$_POST['video'],'video');
        }
    }
}
