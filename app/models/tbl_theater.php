<?php
    require_once __DIR__."/db_module.php";
    class theater{
        public $id;
        public $id_location;
        public $address;
        public $phone;

        function __construct($id, $id_location, $address, $phone)
        {
            $this->id=$id;
            $this->id_location=$id_location;
            $this->address=$address;
            $this->phone=$phone;
        }

        function GetLocation(){
            require_once __DIR__."/tbl_location.php";
            $data = new tbl_location();
            return $data->GetLocation('id='.$this->id_location)[0];
        }
    }
    class tbl_theater{
        function getTheater($cond='1'){
            $class = null;
            $sql = null;
            $query = "SELECT * FROM tbl_theater WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new theater($item['id'],$item['id_location'],$item['address'],$item['phone']);
            }
            releaseMemory($sql,$result);
            return $class;
        }

        function insertTheater($id_location,$address,$phone)
        {
            $sql = null;
            $query = "INSERT INTO tbl_theater VALUES(NULL,'$id_location','$address','$phone')";
            createConnection($sql);
            $result = executeQuery($sql, $query);
            if ($result) {
                $last_id = mysqli_insert_id($sql);        
                return $last_id;
            }
            releaseMemory($sql);
        
        }
        function updateTheater($id,$id_location,$address,$phone)
        {
            $sql = null;
            $query = "UPDATE tbl_theater SET `id_location`='$id_location',`address`='$address',`phone`='$phone' WHERE id='$id'";
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
        function deleteTheater($id)
        {
            $sql = null;
            $query = "DELETE FROM tbl_theater WHERE id='$id'";
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