<?php
if (isset($_POST['user']) && isset($_POST['password'])) {
    $email = $_POST['user'];
    $pass = $_POST['password'];
    $user = $this->getModel('tbl_customer')->getCustomer("email ='$email' AND password='$pass'");
    $admin = $this->getModel('tbl_admin_acc')->getAdmin("email ='$email' AND password='$pass'");
    if ($user != null || $admin != null) {
        session_unset();
        session_destroy();
        session_start();
        if($_POST['extendSession']) $_SESSION['endTime'] = date('YmdHis',strtotime('+60 minutes',strtotime(date('YmdHis'))));
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $pass;
        if($admin != null) $_SESSION['admin']='admin';
        header("Location:".DOMAIN.PRONAME."/");
        exit;
    }
    else echo "<script>alert('Tài khoản hoặc mật khẩu sai!');</script>";
}
?>