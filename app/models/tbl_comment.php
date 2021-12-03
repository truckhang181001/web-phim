<?php
    require_once __DIR__."/db_module.php";
    class comment{
        public $id;
        public $id_user;
        public $desc;
        public $time;
        
        function __construct($id, $id_user, $desc, $time)
        {
            $this->id=$id;
            $this->id_user=$id_user;
            $this->id_film=$desc;
            $this->rating=$time;
        }
    }
    class tbl_comment{
        function GetComment($cond='1'){
            $sql = null;
            $class = null;
            $query = "SELECT * FROM tbl_comment WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new comment($item['id'],$item['id_user'],$item['desc'],$item['time']);
            }
            releaseMemory($sql,$result);
            return $class;
        }
    }
?>