<?php
    require_once __DIR__."/db_module.php";
    class plan{
        public $id;
        public $id_film;
        public $date;

        function __construct($id, $id_film, $date)
        {
            $this->id=$id;
            $this->id_film=$id_film;
            $this->date = $date;
        }
    }
    class tbl_plan{
        function GetPlan($cond='1'){
            $class = null;
            $sql = null;
            $query = "SELECT * FROM tbl_plan WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new plan($item['id'],$item['id_film'],$item['date']);
            }
            releaseMemory($sql,$result);
            return $class;
        }
    }
?>