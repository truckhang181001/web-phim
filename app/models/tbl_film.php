<?php
require_once __DIR__ . "/db_module.php";
class film
{
    public $id;
    public $name;
    public $desc;
    public $id_category;
    public $release;
    public $time;
    public $actor;
    public $director;
    public $studio;
    public $type;

    function __construct($id, $name, $desc, $id_category, $release, $time, $actor, $director, $studio, $type)
    {
        $this->id = $id;
        $this->id_category = $id_category;
        $this->name = $name;
        $this->desc = $desc;
        $this->release = $release;
        $this->time = $time;
        $this->actor = $actor;
        $this->director = $director;
        $this->studio = $studio;
        $this->type = $type;
    }
    public function GetCate()
    {
        require_once __DIR__ . "/tbl_category.php";
        $cate = new tbl_category();
        return $cate->getCategory('id=' . $this->id_category)[0]->name;
    }
    public function getImage($cond=""){
        require_once __DIR__ . "/tbl_image.php";
        $cate = new tbl_image();
        return $cate->getImage("id_film=$this->id AND " . $cond );
    }
}
class tbl_film
{
    function GetFilm($cond = '1')
    {
        $sql = null;
        $class = null;
        $query = "SELECT * FROM tbl_film WHERE " . $cond;
        createConnection($sql);
        $result = executeQuery($sql, $query);
        while ($item = mysqli_fetch_assoc($result)) {
            $class[] = new film($item['id'], $item['name'], $item['desc'], $item['id_category'], $item['release'], $item["time"], $item['actor'],$item['director'],$item['studio'], $item["type"]);
        }
        releaseMemory($sql, $result);
        return $class;
    }
    function insertFilm($name, $desc, $id_category, $release, $time, $actor, $director, $studio, $type)
    {
        $sql = null;
        $query = "INSERT INTO tbl_film VALUES(NULL,'$name','$desc',$id_category,'$release',$time,'$actor','$director','$studio','$type')";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        if ($result) {
            $last_id = mysqli_insert_id($sql);        
            return $last_id;
        }
        else return mysqli_error($sql);
        releaseMemory($sql);
    }
    function deleteFilm($id){
        $sql = null;
        $query = "DELETE FROM tbl_film WHERE id='$id'";
        createConnection($sql);
        $result = executeQuery($sql, $query);
        releaseMemory($sql);
    }
    function updateFilm($id, $name, $desc, $id_category, $release, $time, $actor, $director, $studio, $type){
        $sql = null;
        $query = "UPDATE `tbl_film` SET `name`='$name', `desc`='$desc', `id_category`=$id_category, `release`='$release', `time`=$time, `actor`='$actor', `director`='$director', `studio`='$studio', `type`='$type'  WHERE id=$id";
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
