<?php
require_once __DIR__ . "/db_module.php";
class room
{
    public $id;
    public $id_theater;
    public $name;
    public $seat_col;
    public $seat_row;
    function __construct($id, $id_theater, $name, $seat_col, $seat_row)
    {
        $this->id = $id;
        $this->id_theater = $id_theater;
        $this->name = $name;
        $this->seat_col = $seat_col;
        $this->seat_row = $seat_row;
    }
}
class tbl_room
{
    function getRoom($cond = '1')
    {
        $sql = null;
        $class = null;
        $query = "SELECT * FROM tbl_room WHERE " . $cond;
        createConnection($sql);
        $result = executeQuery($sql, $query);
        while ($item = mysqli_fetch_assoc($result)) {
            $class[] = new room($item['id'],$item['id_theater'],$item['name'],$item['seat_col'],$item['seat_row']);
        }
        releaseMemory($sql, $result);
        return $class;
    }
    function insertRoom($id_theater,$name,$seat_col,$seat_row){
        $sql = null;
        $query = "INSERT INTO tbl_room VALUES(NULL,$id_theater,'$name',$seat_col,$seat_row)";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        if ($result) {
            $last_id = mysqli_insert_id($sql);        
            return $last_id;
        }
        releaseMemory($sql);
    }
    function deleteRoom($id){
        $sql = null;
        $query = "DELETE FROM tbl_room WHERE id=$id";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        releaseMemory($sql);
    }
    function updateRoom($id,$id_theater,$name,$seat_row,$seat_col){
        $sql = null;
        $query = "UPDATE `tbl_room` SET `id_theater`=$id_theater,`name`='$name',`seat_col`=$seat_col,`seat_row`=$seat_row WHERE id=$id";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        releaseMemory($sql);
    }
}
