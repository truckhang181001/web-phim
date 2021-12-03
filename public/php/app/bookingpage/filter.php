<?php
class bookingpage_filter
{
    private $name;
    private $prevID;
    private $imgURL;
    private $placeholder;
    private $data;

    function getData(){
        while ($item = mysqli_fetch_assoc($this->data)) {
            $select = '';
            if (isset($_GET[$this->name])) {
                if ($_GET[$this->name] == $item['name']) {
                    $select = 'selected';
                    $cityid = $item['id'];
                }
            }
            echo "<option ".$select.">".$item['name']."</option>";
        }
    }
    function __construct()
    {
        echo "
            <div class='".$this->name."-sort filter-item'>
                <div class='filter-item__icon'>
                    <img src='".$this->imgURL."' alt='ticket'>
                </div>
            </div>
            <select class='filter-item__form' name='".$this->name."' onchange='this.form.submit()'>
                <option selected disabled>".$this->placeholder."</option>
                ".$this->getData()."
            </select>
        ";
    }
}
?>