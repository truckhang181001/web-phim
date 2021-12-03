<?php
require_once __DIR__."/db_module.php";
class price{
    public $id;
    public $type;
    public $price;
    function __construct($id,$type,$price)
    {
        $this->id=$id;
        $this->type=$type;
        $this->price=$price;
    }
}
class tbl_price{
    function getPrice($cond='1'){
        $class = null;
        $sql = null;
        $query = "SELECT * FROM tbl_price WHERE ".$cond;
        createConnection($sql);
        $result = executeQuery($sql,$query);
        while($item = mysqli_fetch_assoc($result)){
            $class[] = new price($item['id'],$item['typeseat'],$item['price']);
        }
        releaseMemory($sql,$result);
        return $class;
    }
    function updatePrice($id,$type,$price){
        $sql = null;
        $query = "UPDATE `tbl_price` SET `id`=$id, `type`=$type, `$price`=$price";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        if ($result) {
            $last_id = mysqli_insert_id($sql);        
            return $last_id;
        }
        else return mysqli_error($sql);
        releaseMemory($sql);
    }
}
?>