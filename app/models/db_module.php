<?php
    require_once __DIR__."/../../config.php";

    function createConnection(&$sql) {
        $sql = mysqli_connect("125.234.104.133", "webgr08", "MswMBY7lt9jHSP62", "webgr08");
        if(mysqli_connect_errno()){
            echo mysqli_connect_error();
            exit();
        }
    }

    function executeQuery($sql, $q) {
        return mysqli_query($sql, $q);
    }

    function executeNoneQuery($sql, $q) {
        return mysqli_query($sql, $q) != false;
    }

    function releaseMemory($sql, $result = null) {
        if ($result != null) {
            mysqli_free_result($result);
        }
        mysqli_close($sql);
    }
?>