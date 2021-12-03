<?php
    class personal_information extends Controller{
        function __construct()
        {
            if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                $email = $_SESSION['email'];
                $pass = $_SESSION['password'];
                if(isset($_SESSION['admin'])){
                    $data = $this->getModel('tbl_admin_acc')->getAdmin("email='$email' AND password='$pass'")[0];
                }
                else $data = $this->getModel('tbl_customer')->getCustomer("email='$email' AND password='$pass'")[0];
                $this->getView('personal_information_page',$data);
            }
        }  
    }
?>