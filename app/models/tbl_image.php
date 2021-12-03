<?php
    require_once __DIR__."/db_module.php";
    class image{
        public $id;
        public $id_film;
        public $name;
        public $type;

        function __construct($id, $id_film, $name, $type)
        {
            $this->id=$id;
            $this->id_film=$id_film;
            $this->name=$name;
            $this->type=$type;
        }
    }
    class tbl_image{
        function getImage($cond='1'){
            $sql = null;
            $class = null;
            $query = "SELECT * FROM tbl_image WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new image($item['id'],$item['id_film'],$item['name'],$item['type']);
            }
            releaseMemory($sql,$result);
            return $class;
        }
        function insertImage($id_film,$name,$type){
            $sql = null;
            $query = "INSERT INTO tbl_image VALUES(NULL,$id_film,'$name','$type')";
            createConnection($sql);
            $result = executeQuery($sql,$query);
            releaseMemory($sql);
        }
        function deleteImage($cond='0'){
            $sql = null;
            $query = "DELETE FROM tbl_image WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            releaseMemory($sql);
        }
        function updateImage($id,$name){
            $sql = null;
            $query = "UPDATE tbl_image SET name='$name' WHERE id='$id'";
            createConnection($sql);
            $result = executeQuery($sql,$query);
            releaseMemory($sql);
        }
    }
?>