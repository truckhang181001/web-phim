<?php
    if(isset($_POST['sign_out'])){
        session_unset();
        session_destroy();
        header("Location: ".DOMAIN.PRONAME);
        exit;
    }
?>