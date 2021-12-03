<?php
    require_once __DIR__."/db_module.php";
    class admin_acc{
        public $id;
        public $name;
        public $sex;
        public $dob;
        public $phone;
        public $address;
        public $email;
        public $password;

        function __construct($id, $name, $sex, $dob, $phone, $address, $email, $password)
        {
            $this->id = $id;
            $this->name = $name;
            $this->sex = $sex;
            $this->dob = $dob;
            $this->phone = $phone;
            $this->address=$address;
            $this->email = $email;
            $this->password = $password;
        }
    }
    class tbl_admin_acc{
        function getAdmin($cond='1'){
            $class = null;
            $sql = null;
            $query = "SELECT * FROM tbl_admin WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new admin_acc($item['id'],$item['name'],$item['sex'],$item['dob'],$item['phone'],$item['address'],$item['email'],$item['password']);
            }
            releaseMemory($sql,$result);
            return $class;
        }
    }
?>