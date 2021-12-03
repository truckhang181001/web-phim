<?php
    $controller = new controller();
    $tbl_customer = $controller->getModel("tbl_customer");
    
    if (isset($_POST['updatePersonalInfo'])) {
        updateCustomer($tbl_customer);
        header("Location: ".CURLINK);
        exit;
    }
    function updateCustomer($tbl_customer)
    {
        $password =$_POST['userPsw'];
        $name = $_POST['userName'];
        $sex = $_POST['userSex'];
        $dob = $_POST['userYear'];
        $address =$_POST['userAddress'];
        $phone = $_POST['userPhone'];
        $tbl_customer->updateCustomer($_POST['updatePersonalInfo'], $password, $name, $sex, $dob, $address, $phone);
    }
?>