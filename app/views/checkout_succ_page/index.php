<?php
require_once "./public/php/app/checkout_succ/index.php";
?>
<style>
    div.b128 {
        border-left: 1px black solid;
        height: 50px;
    }
</style>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
<body>
    <section class="payment-section">
        <div class="payment">
            <div class="payment__sub-title">
                VNPAY RESPONSE
            </div>
            <div class="payment__title">
                THANH TOÁN THÀNH CÔNG
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                           MÃ ĐƠN HÀNG
                        </div>
                        <input type="text" name="codeOder" class="payment__input__psw-confirm" style="color:white" value="<?php echo $_GET['vnp_TxnRef'] ?>" readonly>
                    </div>
                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                            SỐ TIỀN
                        </div>
                        <input type="text" name="totalMoney" class="payment__input__psw-confirm" style="color:white" value="<?php echo number_format($_GET['vnp_Amount'] / 100) . " VNĐ" ?>" readonly>
                    </div>
        
                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                           MÃ GIAO DỊCH TẠI VNPAY
                        </div>
                        <input type="text" name="codeVNPay" class="payment__input__psw-confirm" style="color:white" value="<?php echo $_GET['vnp_TransactionNo'] ?>" readonly>
                    </div>

                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                           MÃ NGÂN HÀNG
                        </div>
                        <input type="text" name="codeBank" class="payment__input__psw-confirm" style="color:white" value="<?php echo $_GET['vnp_BankCode'] ?>" readonly>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                            THỜI GIAN THANH TOÁN
                        </div>
                        <input style="color:white" type="text" name="timePayment" class="payment__input__psw-confirm" value="<?php echo date("d/m/Y H:i:s", strtotime($_GET['vnp_PayDate'])) ?>" readonly>
                    </div>
                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                            KÉT QUA GIAO DỊCH
                        </div>
                        <?php
                            if ($secureHash == $vnp_SecureHash) {
                                if ($_GET['vnp_ResponseCode'] == '00') {
                                    echo "<input style='color: white' type='text' name='resultTransaction' class='payment__input__psw-confirm' value='Giao dịch thành công' readonly>";
                                } else {
                                    echo "<input style='color: white' type='text' name='resultTransaction' class='payment__input__psw-confirm' value='Giao dịch không thành công' readonly>";
                                }
                            } else {
                                echo "<input style='color: white' type='text' name='resultTransaction' class='payment__input__psw-confirm' value='Không hợp lệ' readonly>";
                            }?>
                    </div>
                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                            NỘI DUNG THANH TOÁN
                        </div>
                        <input style="color:white" class="payment__input__psw-confirm" name="message" value="<?php echo $_GET['vnp_OrderInfo'] ?>" readonly>
                    </div>
                    <br>
                    <div class="payment__input mb-3" style="background-color: white; padding: 10px;">
                        <div class="code-container" style="display: flex; justify-content: center;">
                        <?php
                        //In barcode
                        echo bar128(stripcslashes($_GET['vnp_TxnRef']));
                        ?>
                        </div>
                    </div>
                </div>  
            </div>
            <a href="<?php echo PRONAME?>" class="payment__btn btnf">Trang chủ</a>
        </div>
    </section>
</body>
