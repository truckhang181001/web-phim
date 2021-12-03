<?php
    require_once __DIR__."/db_module.php";
    class schedule{
        public $id;
        public $id_film;
        public $id_theater;
        public $date;

        function __construct($id,$id_film,$id_theater,$date)
        {
            $this->id=$id;
            $this->id_film=$id_film;
            $this->id_theater=$id_theater;
            $this->date=$date;
        }
        function GetFilm(){
            require_once __DIR__."/tbl_film.php";
            $dataFilm = new tbl_film();
            return $dataFilm->GetFilm('id='.$this->id_film)[0];
        }
        function GetShowTime($cond=""){
            require_once __DIR__."/tbl_showtime.php";
            $dataFilm = new tbl_showtime();
            return $dataFilm->GetShowTime('id_schedule='.$this->id.' '.$cond);
        }
        function GetTheater(){
            require_once __DIR__."/tbl_theater.php";
            $dataTheater = new tbl_theater();
            return $dataTheater->GetTheater('id='.$this->id_theater)[0];
        }
    }
    class tbl_schedule{
        function GetSchedule($cond=1){
            $scheClass=[];
            $sql = null;
            $query = "SELECT * FROM tbl_schedule WHERE ".$cond."";
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($sche = mysqli_fetch_assoc($result)){
                $scheClass[] = new schedule($sche['id'],$sche['id_film'],$sche['id_theater'],$sche['date']);
            }
            releaseMemory($sql,$result);
            return $scheClass;
        }

        function insertSchedule($id_film, $id_theater, $date) {
            $sql = null;
            $query = "INSERT INTO tbl_schedule VALUES(NULL,'$id_film', '$id_theater', '$date')";
            createConnection($sql);
            $result = executeQuery($sql, $query);
            if ($result) {
                    $last_id = mysqli_insert_id($sql);        
                    return $last_id;
            }
            releaseMemory($sql);
        }

        function updateSchedule($id,$id_film, $id_theater, $date)
        {
            $sql = null;
            $query = "UPDATE tbl_schedule SET id_film='$id_film', id_theater='$id_theater', date='$date'  WHERE id='$id'";
            createConnection($sql);
            $result=mysqli_query($sql,$query);
            if(!$result)
            {
                die('Update error: ');
            }
            else
            {
                header("Location: ".CURLINK);
            }
            releaseMemory($sql);
        
        }
        function deleteSchedule($id)
        {
            $sql = null;
            $query = "DELETE FROM tbl_schedule WHERE id='$id'";
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