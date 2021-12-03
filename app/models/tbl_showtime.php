<?php
require_once __DIR__ . "/db_module.php";
class showtime extends controller
{
    public $id;
    public $id_schedule;
    public $id_room;
    public $type;
    public $start_time;
    public $end_time;

    function __construct($id, $id_schedule, $id_room, $type, $start_time, $end_time)
    {
        $this->id = $id;
        $this->id_schedule = $id_schedule;
        $this->id_room = $id_room;
        $this->type = $type;
        $this->start_time = substr($start_time,0,5);
        $this->end_time = substr($end_time,0,5);      
    }

    public function GetSchedule(){
        require_once __DIR__."/tbl_schedule.php";
            $dataSchedule = new tbl_schedule();
            return $dataSchedule->GetSchedule('id='.$this->id_schedule)[0];
    }
    public function getRoom(){
        return $this->getModel("tbl_room")->getRoom('id='.$this->id_room)[0];
    }
    public function getAvailableSeat(){
        $dataRoom = $this->getModel("tbl_room")->getRoom('id='.$this->id_room)[0];
        $dataReceipt = $this->getModel("tbl_receipt")->getSeat($this->id);
        return $dataRoom->seat_col * $dataRoom->seat_row - count($dataReceipt);
    }
}

class tbl_showtime{
    function GetShowTime($cond='1'){
        $sql = null;
        $class=null;
        $query = "SELECT * FROM tbl_showtime WHERE ".$cond;
        createConnection($sql);
        $result = executeQuery($sql,$query);
        while($item = mysqli_fetch_assoc($result)){
            $class[] = new showtime($item['id'],$item['id_schedule'],$item['id_room'],$item['type'],$item['start_time'],$item['end_time']);
        }
        releaseMemory($sql,$result);
        return $class;
    }

    function insertShowtime($id_schedule, $id_room, $type, $start_time, $end_time) {
        $sql = null;
        $query = "INSERT INTO tbl_showtime VALUES(NULL,'$id_schedule', '$id_room', '$type', '$start_time', '$end_time')";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        if ($result) {
                $last_id = mysqli_insert_id($sql);        
                return $last_id;
        }
        releaseMemory($sql);
    }
    //Chỉnh sửa phần update
    function updateShowtime($id,$id_schedule, $type, $start_time, $end_time)
        {
            $sql = null;
            $query = "UPDATE tbl_showtime SET id_schedule=$id_schedule, `type`='$type', start_time='$start_time', end_time='$end_time'  WHERE id='$id'";
            createConnection($sql);
            $result=mysqli_query($sql,$query);
            if(!$result)
            {
                die(mysqli_error( $sql));
            }
            else
            {
                header("Location: ".CURLINK);
            }
            releaseMemory($sql);
        
        }
        function deleteShowtime($id)
        {
            $sql = null;
            $query = "DELETE FROM tbl_showtime WHERE id='$id'";
            createConnection($sql);
            $result=executeQuery($sql,$query); 
            if(!$result)
            {
                die("Xóa thất bại");
            }          
            releaseMemory($sql);
        
        }
}
?>