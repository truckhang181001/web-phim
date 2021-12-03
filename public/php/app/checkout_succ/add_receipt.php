<?php
if ($secureHash == $vnp_SecureHash) {
    if ($_GET['vnp_ResponseCode'] == '00') {
        if ($this->getModel("tbl_receipt")->getReceipt('id_transaction='.$_GET['vnp_TxnRef']) == null) {
            $email = $_SESSION['email'];
            $pass = $_SESSION['password'];
            $id_customer = $_COOKIE['id_customer'];
            $id_showtime = $_COOKIE['id_showtime'];
            $seat = json_decode($_COOKIE['seat']);
            foreach ($seat as $item) {
                $this->getModel("tbl_receipt")->insertReceipt($id_customer, $id_showtime, $item, 1, $_GET['vnp_PayDate'], $_GET['vnp_TxnRef']);
            }
        }
    }
}
