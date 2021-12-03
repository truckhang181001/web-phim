<?php
$controller = new controller();
$tbl_customer = $controller->getModel("tbl_customer");

if (isset($_POST['signUpAccount'])) {
    updateCustomer($tbl_customer);
}
function updateCustomer($tbl_customer)
{
    $pass = $_POST['userPsw'];
    $passConf = $_POST['userPswConf'];
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $sex = $_POST['userSex'];
    $dob = $_POST['userYear'];
    $address = $_POST['userAddress'];
    $phone = $_POST['userPhone'];
    if ($pass != $passConf) {
        echo "<script>alert('Vui lòng kiểm tra lại mật khẩu!');</script>";
    } else {
        if ($tbl_customer->getCustomer("email='$email'") != null) echo "<script>alert('Email đã tồn tại, vui lòng đăng ký bằng email khác!');</script>";
        else {
            $tbl_customer->insertCustomer($email, $pass, $name, $sex, $dob, $address, $phone);
            header("Location: " . DOMAIN . PRONAME . "/dang-nhap");
            exit;
        }
    }
}
