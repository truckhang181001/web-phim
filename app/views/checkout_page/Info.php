<?php
    if(isset($_POST['checkoutTicket'])){
        require_once "./public/php/app/checkout/index.php";
    }
?>

<div class="information-detail">
    <div class="title d-flex justify-content-center align-items-center">
        <div class="title--text">THÔNG TIN ĐƠN HÀNG</div>      
    </div>
    <div class="row">
            <div class="col-3 name-film"><?php echo $data['schedule']->getFilm()->name?></div>
            <div class="col-3 address">BOYS <?php echo $data['schedule']->getTheater()->address?></div>
            <div class="col-3 address"><?php echo $data['showtime']->getRoom()->name?></div>
            <div class="col-3 time"><?php echo $data['schedule']->date." - ".$data['showtime']->start_time?></div>
    </div>
    <div class="row">
        <?php

            if($data['seat_normal'] != null)
            echo "
            <div class='col-4'>
                <p class='item-rep' style='font-weight: bold;'>GHẾ THƯỜNG</p>
            </div>
            <div class='col-4'>
                <p class='item-rep' style='font-weight: bold;'>".count($data['seat_normal'])." VÉ</p>
                <p class='item-rep' style='font-weight:lighter'>".printSeat($data['seat_normal'])."</p>
            </div>
            <div class='col-4'>
                <p class='item-rep' style='font-weight: bold;'>ĐƠN GIÁ</p>
                <P class='item-rep' style='font-weight:lighter'>90.000 VNĐ</P>
            </div>";
            if($data['seat_vip'] != null)
            echo "
            <div class='col-4'>
                <p class='item-rep' style='font-weight: bold;'>GHẾ VIP</p>
            </div>
            <div class='col-4'>
                <p class='item-rep' style='font-weight: bold;'>".count($data['seat_vip'])." VÉ</p>
                <p class='item-rep' style='font-weight:lighter'>".printSeat($data['seat_vip'])."</p>
            </div>
            <div class='col-4'>
                <p class='item-rep' style='font-weight: bold;'>ĐƠN GIÁ</p>
                <P class='item-rep' style='font-weight:lighter'>150.000 VNĐ</P>
            </div>";

            function printSeat($seat){
                $str="";
                foreach($seat as $item) $str .= $item->name.", ";
                return substr($str,0,-2);
            }
        ?> 
    </div>
    <div class="row">
        <div class="tolal-amount">
            <div class="total-amount--text">THÀNH TIỀN:  <span style="color: aqua;"><?php echo number_format($data["total"],0,',','.')?> VNĐ</span></div>
        </div>
        <form action="" method='post'>
            <button name="checkoutTicket" class="btnf" type="submit">THANH TOÁN</button>
        </form>
    </div>
    
</div>