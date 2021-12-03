<?php
require_once __DIR__ . "/db_module.php";
class customer
{
    public $id;
    public $email;
    public $password;
    public $name;
    public $sex;
    public $dob;
    public $address;
    public $phone;

    function __construct($id, $email, $password, $name, $sex, $dob, $address, $phone)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->sex = $sex;
        $this->dob = $dob;
        $this->address = $address;
        $this->phone = $phone;
    }
}

class tbl_customer
{
    function getCustomer($cond = '1')
    {
        $sql = null;
        $class = null;
        $query = "SELECT * FROM tbl_customer WHERE " . $cond;
        createConnection($sql);
        $result = executeQuery($sql, $query);
        while ($item = mysqli_fetch_assoc($result)) {
            $class[] = new customer($item['id'], $item['email'], $item['password'], $item['name'], $item['sex'], $item['dob'], $item['address'], $item['phone']);
        }
        releaseMemory($sql, $result);
        return $class;
    }
    function insertCustomer($email, $password, $name, $sex, $dob, $address, $phone){
        $sql = null;
        $last_id = null;
        $query = "INSERT INTO tbl_customer VALUES(NULL,'$email','$password','$name','$sex','$dob','$address',$phone)";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        if ($result) {
            $last_id = mysqli_insert_id($sql);
        }
        releaseMemory($sql);
        return $last_id;
    }
    function updateCustomer($id, $password, $name, $sex, $dob, $address, $phone){
        $sql = null;
        $query = "UPDATE tbl_customer SET `password`='$password', `name`='$name', `sex`='$sex', `dob`='$dob', `address`='$address', `phone`= '$phone' WHERE `id`= '$id'";
        createConnection($sql);
        executeQuery($sql, $query);
        releaseMemory($sql);
    }
}
