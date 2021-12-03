<?php
switch ($url) {
    case "edit": {
        if (isset($_GET['id'])) {
            $dataLocation = $this->getModel("tbl_location")->GetLocation();
            $dataTheater = $this->getModel("tbl_theater")->getTheater('id='.$_GET['id'])[0];
            $this->getViewAd("theater_edit", [
                "theater" => $dataTheater,
                "location" =>$dataLocation
            ]);
        };
            break;
        }
    case "add": {
            $dataLocation = $this->getModel("tbl_location")->GetLocation();
            $dataTheater = $this->getModel("tbl_theater")->GetTheater();
            $this->getViewAd("theater_add",[
                "theater"=> $dataTheater,              
                "location" =>$dataLocation
            ]);
            break;
        }
    default:
        theaterDefault($this);
}

function theaterDefault($subClass)
{
    $dataTheater = $subClass->getModel("tbl_theater")->getTheater();
    $subClass->getViewAd("theater", $dataTheater);
}
