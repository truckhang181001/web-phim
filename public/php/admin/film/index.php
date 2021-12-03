<?php
    if(isset($_POST['deleteItem']) && $_POST['deleteItem'] == "delete"){
        deleteItem($_POST['id']);
    }
    function deleteItem($id){
        $controller = new controller();
        $tbl_film = $controller->getModel("tbl_film");
        //Hàm xóa
    }
?>