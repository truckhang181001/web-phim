<?php
class info extends controller{
    function __construct()
    {
        if(isset($_GET['film'])){
            $dataFilm = $this->getModel("tbl_film");
            if($dataFilm->GetFilm('id='.$_GET['film']) != null){
                $classFilm = $dataFilm->GetFilm('id='.$_GET['film']);
                $dataImgPoster = $this->getModel("tbl_image")->getImage("id_film=".$classFilm[0]->id." AND type='poster'")[0];
                // $dataComment = $this->getModel('tbl_comment');
                // $dataRating = $this->getModel('tbl_rating');
                $data = [
                    "film"=>$classFilm,
                    "poster"=>$dataImgPoster
                ];
                $this->getView("info_page",$data);
            }
            else{
                $this->getView("error404");
            }
        }
    }
}
?>