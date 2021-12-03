<?php
 if (isset($_POST['checkoutTicket'])) {
    setcookie("id_customer",(string)$data['customer']->id, time() + 11*60);
    setcookie("id_showtime",(string)$data['showtime']->id, time() + 11*60);
    setcookie("seat",json_encode($_GET['seat']), time() + 11*60);
}