<?php
    require_once __DIR__."/db_module.php";
    class rating{
        public $id;
        public $id_user;
        public $id_film;
        public $rating;
        
        function __construct($id, $id_user, $id_film, $rating)
        {
            $this->id=$id;
            $this->id_user=$id_user;
            $this->id_film=$id_film;
            $this->rating=$rating;
        }
    }
    class tbl_rating{
        function GetRating($cond='1'){
            $class = null;
            $sql = null;
            $query = "SELECT * FROM tbl_rating WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new rating($item['id'],$item['id_user'],$item['id_film'],$item['rating']);
            }
            releaseMemory($sql,$result);
            return $class;
        }
    }
?>