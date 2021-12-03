<!--TAB-CONTENT -->
<div class=" info-page__tab-content__tab ">
        <div class="col-xl-2 col-4">
            <a class="info-page__tab-content__tab__tablinks active info-page--effect" href="#info-page__tab-content--main">NỘI DUNG</a>
        </div>
        <div class="col-xl-2 col-4">
            <a class="info-page__tab-content__tab__tablinks info-page--effect" href="#info-page__tab-content--comment">BÌNH LUẬN</a>
        </div>
    </div>
    <div id="info-page__tab-content--main" class="info-page__tab-content__tab--tabcontent">
        <p><?php echo $data["film"][0]->desc;?></p>
    </div>
    <div id="info-page__tab-content--comment" class="info-page__tab-content__tab--tabcontent">
        <div class="info-page__tab-content__tab--tabcontent--tag ">
            <div class="user-avt col-1">
                <i class="fas fa-user-circle "></i>
            </div>
            <div class="user-info col-2">
                <p>15 ngày trước</p>
                <h4>TRUNG HUY</h4>
                <p><i class="fas fa-check" style="color: #1BCBB7; "></i> Đã xác minh</p>
            </div>
            <div class="user-comment col-9">
                <input class="col-12" type="text " placeholder="Bạn đang nghĩ gì? " value="Huy nè">
                <div class="user-comment__evaluate info-page--effect ">
                    <i class="fas fa-star fa-star--style col-1 "></i>
                    <i class="fas fa-star fa-star--style col-1 "></i>
                    <i class="fas fa-star fa-star--style col-1 "></i>
                    <i class="fas fa-star fa-star--style col-1 "></i>
                    <i class="fas fa-star fa-star--style col-1 "></i>
                </div>
                <div class="user-comment__vote col-xl-8 col-md-10 col-12">
                    <div class="user-comment__vote--like info-page--effect ">
                        <i class="far fa-thumbs-up "></i> (1000)
                    </div>
                    <div class="user-comment__vote--dislike info-page--effect ">
                        <i class="far fa-thumbs-down "></i> (0)
                    </div>
                    <div class="user-comment__vote--report info-page--effect ">Báo cáo</div>
                    <input type="text " placeholder="Nhập bình luận" class="info-page--effect ">
                </div>
            </div>
        </div>
        <div class="info-page__tab-content__tab--tabcontent--tag ">
            <div class="user-avt col-1 ">
                <i class="fas fa-user-circle "></i>
            </div>
            <div class="user-info col-2">
                <p>15 ngày trước</p>
                <h4>TRUNG HUY</h4>
                <p><i class="fas fa-check " style="color: #1BCBB7; "></i> Đã xác minh</p>
            </div>
            <div class="user-comment col-9 ">
                <input class="col-12 " type="text " placeholder="Bạn đang nghĩ gì? " value="Lê Trung Huy">
                <div class="user-comment__evaluate info-page--effect ">
                    <i class="fas fa-star fa-star--style col-1 "></i>
                    <i class="fas fa-star fa-star--style col-1 "></i>
                    <i class="fas fa-star fa-star--style col-1 "></i>
                    <i class="fas fa-star fa-star--style col-1 "></i>
                    <i class="fas fa-star fa-star--style col-1 "></i>
                </div>
                <div class="user-comment__vote col-xl-8 col-md-10 col-12">
                    <div class="user-comment__vote--like info-page--effect ">
                        <i class="far fa-thumbs-up "></i> (1000)
                    </div>
                    <div class="user-comment__vote--dislike info-page--effect ">
                        <i class="far fa-thumbs-down "></i> (0)
                    </div>
                    <div class="user-comment__vote--report info-page--effect ">Báo cáo</div>
                    <input type="text " placeholder="Nhập bình luận">
                </div>
            </div>
        </div>
        <button type="text " class="info-page__tab-content__tab--tabcontent--btnmore info-page--effect ">Xem thêm</button>
    </div>
<!--TAB-CONTENT -->
<script type="text/javascript" src="../../Resource/js/InfoPage.js"></script>