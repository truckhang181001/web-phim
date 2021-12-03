<?php
class home extends controller{
    function __construct()
    {
        $tblSche = $this->GetModel("tbl_schedule");
        $dataSche = $tblSche->GetSchedule("date='".date("Y/m/d")."'");
        $dataFtu = $tblSche->GetSchedule("date > '".date("Y/m/d")."'");
        $dataFilm=[];
        $dataFilmFtu=[];
        foreach($dataSche as $item){
            $dataFilm[]=$item->GetFilm();
        }
        foreach($dataFtu as $item){
            $dataFilmFtu[]=$item->GetFilm();
        }
        $this->getView("home_page",[
            'film'=>$dataFilm,
            'filmFtu'=>$dataFilmFtu
        ]);
    }
}
?>