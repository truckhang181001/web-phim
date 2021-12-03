<?php
$checkRand = rand(10,100000);
$controller = new controller();
$tbl_schedule = $controller->getModel("tbl_schedule");

if (isset($_POST['addItemSchedule']) && $_POST['addItemSchedule']=="add") {
    insertSchedule($tbl_schedule);
    
}
function insertSchedule($tbl_schedule){
    $id_film = $_POST['id_film'];
    $id_theater = $_POST['id_theater'];
    $date = $_POST['date'];
    if($tbl_schedule->getSchedule("id_film=$id_film AND id_theater=$id_theater AND date='$date'") == null){
        $id_schedule = $tbl_schedule->insertSchedule($id_film, $id_theater, $date);
        header("Location: ".CURLINK);
        exit;
    }
    else echo "<script>alert('Lịch chiếu đã được tạo trước đó, vui lòng kiểm tra lại!!!');</script>";
   
}




    
