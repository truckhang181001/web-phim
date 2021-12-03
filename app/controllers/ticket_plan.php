<?php
    class ticket_plan extends Controller{
        function __construct()
        {
            // Lấy dữ liệu Schedule
            if(isset($_GET['date']) && isset($_GET['theater']) && isset($_GET['location'])){
                // Lấy lịch chiếu từ $_GET
                // $time = DateTime::createFromFormat('d/m/Y',$_GET['date'])->format('Y-m-d');
                $dataSche = $this->getModel("tbl_schedule")->GetSchedule("date='".$_GET['date']."' AND id_theater=".$_GET['theater']);

                // Trường hợp thay đổi Location nhưng vẫn giữ nguyên theater, date
                if($dataSche != null){
                    if($dataSche[0]->GetTheater()->GetLocation()->id == $_GET["location"]){
                        $data["schedule"] = $dataSche;
                    }
                }
            }
            // In dữ liệu các rạp
            if(isset($_GET['location'])){
                $dataTheater = $this->getModel("tbl_theater")->GetTheater('id_location='.$_GET['location']);
                $data["theater"] = $dataTheater;
            }
            // In dữ liệu tỉnh   
            $dataLocation = $this->getModel("tbl_location")->GetLocation();
            $data["location"]= $dataLocation;
            // Khởi tạo view
            $this->getView("ticket_plan_page",$data);
        }
    }
?>