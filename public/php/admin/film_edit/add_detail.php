<?php
if(isset($_POST['addDetail'])){
    $id_film = $_POST['addDetail'];
    $name = $_POST['nameDetail'];
    uploadImage($id_film, $name, "detail", "img");
    header("Location: " . CURLINK);
    exit;
}