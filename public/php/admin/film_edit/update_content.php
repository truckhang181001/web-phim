<?php
if(isset($_POST['changeFilm'])){
    $controller = new controller();
    $tbl_film = $controller->getModel("tbl_film");

    $id=$_POST['id_film'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $id_category = $_POST['id_category'];
    $release = $_POST['release'];
    $time = $_POST['time'];
    $actor = $_POST['actor'];
    $director = $_POST['director'];
    $studio = $_POST['studio'];
    $type = $_POST['type'];
    $tbl_film->updateFilm($id,$name, $desc, $id_category, $release, $time, $actor, $director, $studio, $type);
    header("Location: " . CURLINK);
    exit;
}