<?php
switch ($url) {
    case "edit": {
            if (isset($_GET['id'])) {
                $dataFilm = $this->getModel("tbl_film")->GetFilm('id='.$_GET['id'])[0];
                $dataCategory = $this->getModel("tbl_category")->getCategory();
                $dataIMG = $this->getModel("tbl_image")->getImage("id_film=" . $_GET['id']);
                $this->getViewAd("film_edit", [
                    "category" => $dataCategory,
                    "film" => $dataFilm,
                    "img" => $dataIMG
                ]);
            };
            break;
        }
    case "add": {
            $dataCategory = $this->getModel("tbl_category")->getCategory();
            $this->getViewAd("film_add", ["category" => $dataCategory]);
            break;
        }
    default:
        filmDefault($this);
}

function filmDefault($subClass)
{
    $dataFilm = $subClass->getModel("tbl_film")->GetFilm();
    $subClass->getViewAd("film", $dataFilm);
}
