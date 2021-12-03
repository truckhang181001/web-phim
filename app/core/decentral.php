<?php
if (in_array($this->controller, $this->req)) {
    $check = false;
    if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
        $email = $_SESSION['email'];
        $pass = $_SESSION['password'];
        switch ($this->controller) {
            case "admin": {
                if ($this->getModel("tbl_admin_acc")->getAdmin("email='$email' AND password='$pass'") != null) $check = true;
                break;
            }
            case "personal_information":{
                if ($this->getModel("tbl_admin_acc")->getAdmin("email='$email' AND password='$pass'") != null 
                || $this->getModel("tbl_customer")->getCustomer("email='$email' AND password='$pass'") != null) $check = true;
                break;
            }
            default: {
                if ($this->getModel("tbl_customer")->getCustomer("email='$email' AND password='$pass'") != null) $check = true;
                break;
            }
        }
    }

    if (!$check) {
        header("Location: " . DOMAIN . PRONAME . "/dang-nhap");
        exit;
    }
}
