<?php
class seat
{
    public $id;
    public $id_room;
    public $name;
    public $type;
    function __construct($id,$id_room, $name, $type)
    {
        $this->id=$id;
        $this->id_room = $id_room;
        $this->name = $name;
        $this->type = $type;
    }
}
class tbl_seat
{
    function getSeat($cond='1')
    {
        $seatClass = [];
        $sql = null;
        $query = "SELECT * FROM tbl_seat WHERE " . $cond . "";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        while ($item = mysqli_fetch_assoc($result)) {
            $seatClass[] = new seat($item['id'],$item['id_room'],$item['name'],$item['type']);
        }
        releaseMemory($sql, $result);
        return $seatClass;
    }
    function insertSeat($id_room, $name, $type)
    {
        $sql = null;
        $query = "INSERT INTO tbl_seat VALUES(NULL,$id_room ,'$name',$type)";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        if ($result) {
            $last_id = mysqli_insert_id($sql);
            return $last_id;
        }
        releaseMemory($sql);
    }
    function deleteSeat($id)
    {
        $sql = null;
        $query = "DELETE FROM tbl_seat WHERE id_room=$id";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        if ($result) {
            $last_id = mysqli_insert_id($sql);
            return $last_id;
        }
        releaseMemory($sql);
    }
}
