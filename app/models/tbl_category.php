<?php
    require_once __DIR__."/db_module.php";
    class category{
        public $id;
        public $name;
        
        function __construct($id, $name)
        {
            $this->id=$id;
            $this->name=$name;
        }
    }
    class tbl_category{
        function getCategory($cond='1'){
            $sql = null;
            $class = null;
            $query = "SELECT * FROM tbl_category WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new category($item['id'],$item['name']);
            }
            releaseMemory($sql,$result);
            return $class;
        }
        function insertCategory($name)
        {
            $sql = null;
            $query = "INSERT INTO tbl_category VALUES(NULL,'$name')";
            createConnection($sql);
            $result = executeQuery($sql, $query);
            if ($result) {
                $last_id = mysqli_insert_id($sql);        
                return $last_id;
            }
            releaseMemory($sql);
        
        }
        function updateCategory($id,$name)
        {
            $sql = null;
            $query = "UPDATE tbl_category SET name='$name' WHERE id='$id'";
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
        function deleteCategory($id)
        {
            $sql = null;
            $query = "DELETE FROM tbl_category WHERE id=$id";
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