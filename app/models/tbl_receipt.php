<?php
require_once __DIR__ . "/db_module.php";
class receipt
{
    public $id;
    public $id_customer;
    public $id_showtime;
    public $id_seat;
    public $status;
    public $date;
    public $id_transaction;

    function __construct($id, $id_customer, $id_showtime, $id_seat, $status, $date, $id_transaction)
    {
        $this->id = $id;
        $this->id_customer = $id_customer;
        $this->id_showtime = $id_showtime;
        $this->id_seat = $id_seat;
        $this->status = $status;
        $this->date= $date;
        $this->id_transaction = $id_transaction;
    }
}
class tbl_receipt
{
    function getSeat($id_showtime)
    {
        $class = [];
        $sql = null;
        $query = "SELECT id_seat FROM tbl_receipt WHERE id_showtime=" . $id_showtime;
        createConnection($sql);
        $result = executeQuery($sql, $query);
        while ($item = mysqli_fetch_assoc($result)) {
            $class[] = $item['id_seat'];
        }
        releaseMemory($sql, $result);
        return $class;
    }
    function getReceipt($cond=1){
        $class = [];
        $sql = null;
        $query = "SELECT * FROM tbl_receipt WHERE $cond";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        while ($item = mysqli_fetch_assoc($result)) {
            $class[] = new receipt($item['id'],$item['id_customer'],$item['id_showtime'],$item['id_seat'],$item['status'],$item['date'],$item['id_transaction']);
        }
        releaseMemory($sql, $result);
        return $class;
    }
    function insertReceipt($id_customer, $id_showtime, $id_seat, $status, $date, $id_transaction){
        $sql = null;
        $query = "INSERT INTO tbl_receipt VALUES(NULL,$id_customer,$id_showtime,$id_seat,$status,'$date',$id_transaction)";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        if ($result) {
            $last_id = mysqli_insert_id($sql);        
            return $last_id;
        }
        releaseMemory($sql);
    }
}
