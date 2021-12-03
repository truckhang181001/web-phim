<?php
class search extends controller
{

    function PhimDangChieu()
    {
        //Lấy danh sách phim đang chiếu
        $dataCate = $this->getModel("tbl_category");
        $tblSche = $this->GetModel("tbl_schedule");
        $dataSche = $tblSche->GetSchedule("date='" . date("Y/m/d") . "'");
        $dataFilm = [];
        $dataFilmF = [];

        if (isset($_GET['search']) && $_GET['search'] != "") {
            $key = $_GET['search'];
            foreach($dataSche as $item){
                $itemsFilm = $this->getModel("tbl_film")->GetFilm("id=$item->id_film AND name LIKE '%$key%'");
                if($itemsFilm != null) $dataFilm[] = $itemsFilm[0];
            }
        } else {
            foreach ($dataSche as $item) {
                $dataFilm[] = $item->GetFilm();
            }
        }

        filterFilm($dataFilm);

        if(isset($_GET['page'])) $totalPage=$_GET['page'];
        else $totalPage = 1;

        for($i=$totalPage*10-10; $i < $totalPage*10; $i++){
            if(isset($dataFilm[$i])){
                $dataFilmF[] = $dataFilm[$i];
            }
        }

        $data = [
            "total" => count($dataFilm),
            "film" => $dataFilmF,
            "category" => $dataCate->getCategory(),
            "status" => 0
        ];
        $this->getView("search_page", $data);
    }
    function PhimSapChieu()
    {
        //Lấy danh sách phim đang chiếu
        $dataCate = $this->getModel("tbl_category");
        $tblSche = $this->GetModel("tbl_schedule");
        $dataSche = $tblSche->GetSchedule("date > '" . date("Y/m/d") . "'");
        $dataFilm = [];
        $dataFilmF = [];
        
        if (isset($_GET['search']) && $_GET['search'] != "") {
            $key = $_GET['search'];
            foreach($dataSche as $item){
                $itemsFilm = $this->getModel("tbl_film")->GetFilm("id=$item->id_film AND name LIKE '%$key%'");
                if($itemsFilm != null) $dataFilm[] = $itemsFilm[0];
            }
        } else {
            foreach ($dataSche as $item) {
                $dataFilm[] = $item->GetFilm();
            }
        }

        filterFilm($dataFilm);

        if(isset($_GET['page'])) $totalPage=$_GET['page'];
        else $totalPage = 1;

        for($i=$totalPage*10-10; $i < $totalPage*10; $i++){
            if(isset($dataFilm[$i])){
                $dataFilmF[] = $dataFilm[$i];
            }
        }

        $data = [
            "total" => count($dataFilm),
            "film" => $dataFilmF,
            "category" => $dataCate->getCategory(),
            "status" => 1
        ];
        $this->getView("search_page", $data);
    }
}
function filterFilm(&$dataFilm)
{
    if (isset($_GET['category']) && $_GET['category'] != null) {
        foreach ($dataFilm as $key => $item) {
            if (!in_array($item->id_category, $_GET['category'])) unset($dataFilm[$key]);
        }
    }
    if (isset($_GET['type']) && $_GET['type'] != null) {
        foreach ($dataFilm as $key => $item) {
            if (!in_array($item->type, $_GET['type'])) unset($dataFilm[$key]);
        }
    }
}
