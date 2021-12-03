<form method="">
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
                        <input type="text" name="codeOder" class="payment__input__psw-confirm" style="color:white" value="3119102" readonly>
                    </div>
                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                            SỐ TIỀN
                        </div>
                        <input type="text" name="totalMoney" class="payment__input__psw-confirm" style="color:white" value="150.000 VND" readonly>
                    </div>
        
                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                           MÃ GIAO DỊCH TẠI VNPAY
                        </div>
                        <input type="text" name="codeVNPay" class="payment__input__psw-confirm" style="color:white" value="1025985" readonly>
                    </div>

                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                           MÃ NGÂN HÀNG
                        </div>
                        <input type="text" name="codeBank" class="payment__input__psw-confirm" style="color:white" value="NCS" readonly>
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                            THỜI GIAN THANH TOÁN
                        </div>
                        <input style="color:white" type="text" name="timePayment" class="payment__input__psw-confirm" value="20/11/2021 15:05 AM" readonly>
                    </div>
                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                            KÉT QUA GIAO DỊCH
                        </div>
                        <input style="color: white" type="text" name="resultTransaction" class="payment__input__psw-confirm" value="Giao dịch thành công" readonly>
                    </div>
                    <div class="payment__input mb-3">
                        <div class="payment__input__title">
                            NỘI DUNG THANH TOÁN
                        </div>
                        <textarea style="color:white" class="payment__input__psw-confirm" name="message" rows="1" placeholder="Thanh toán vé xem phim BoysCinema" readonly></textarea>
                    </div>
                    <br>
                    
                    <div class="mb-3">
                        <img src="./public/img/mavach.jpg" alt="" style="height:60px">
                    </div>
                </div>  

            </div>

            <button type="" class="payment__btn btnf" data-bs-toggle="modal" >Trang chủ</button>
        </div>
    </section>
</form>