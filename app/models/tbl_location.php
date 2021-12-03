<?php
    require_once __DIR__."/db_module.php";
    class location{
        public $id;
        public $name;

        function __construct($id,$name)
        {
            $this->id=$id;
            $this->name=$name;
        }
    }
    class tbl_location{
        function GetLocation($cond=1){
            $locationClass=[];
            $sql = null;
            $query = "SELECT * FROM tbl_location WHERE ".$cond."";
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($loc = mysqli_fetch_assoc($result)){
                $locationClass[] = new location($loc['id'],$loc['name']);
            }
            releaseMemory($sql,$result);
            return $locationClass;
        }
    }
?>