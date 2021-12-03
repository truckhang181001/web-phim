<?php

    class checkout extends Controller{
        function __construct()
        {
            if(isset($_GET['seat']) && isset($_GET['showtime'])){
                $seatVip=[];
                $seatNormal=[];
                foreach($_GET['seat'] as $item){
                    if($this->getModel("tbl_receipt")->getReceipt("id_showtime=".$_GET['showtime']." AND id_seat=".$item) == null){
                        $checkSeat= $this->getModel("tbl_seat")->getSeat("id=".$item)[0];
                        if($checkSeat->type) $seatVip[]=$checkSeat;
                        else $seatNormal[]=$checkSeat;
                    }
                }
                //Tính tổng tiền
                $total=0;
                $dataPrice = $this->getModel("tbl_price")->getPrice();
                foreach($dataPrice as $item){
                    if($item->type) $total+=$item->price*count($seatVip);
                    else $total += $item->price*count($seatNormal);
                }

                $dataShowtime = $this->getModel("tbl_showtime")->getShowtime("id=".$_GET['showtime'])[0];
                $dataSchedule = $dataShowtime->getSchedule();
                $dataCustomer = $this->getModel("tbl_customer")->getCustomer("email='".$_SESSION['email']."' AND password='".$_SESSION['password']."'")[0];

                $this->getView('checkout_page',[
                    "seat_vip"=>$seatVip,
                    "seat_normal"=>$seatNormal,
                    "showtime"=>$dataShowtime,
                    "schedule"=>$dataSchedule,
                    "total"=>$total,
                    "customer"=>$dataCustomer
                ]);
            }
        }
    }

?>