<div class="container">
    <form class="row" style="padding-top:100px" method="post">
        <div class="col-md-1 col-lg-1"></div>
        <div class="col-12 col-md-6 col-lg-5 form-wrapper">
            <div class="mb-3">
                <input type="text" class="form-control" id="validationDefault01" value="" placeholder="Tên của bạn là" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="validationDefault02" value="" placeholder="Số điện thoại" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="validationDefault03" value="" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content" placeholder="Bạn muốn nói gì với chúng tôi" require></textarea>
            </div>
            <div class="button-send">
                <button class="button-send--text btn" type="submit">Gửi</button>
            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-5">
            <img src="<?php echo PRONAME ?>/public/img/Mail sent-rafiki.svg" alt="">
        </div>
    </form>
</div>