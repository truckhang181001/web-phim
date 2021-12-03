$(document).ready(function() {
    // Hàm active tab nào đó
    function activeTab(obj) {
        // Xóa class active tất cả các tab
        $('.info-page__tab-content div div').removeClass('active');

        // Thêm class active vòa tab đang click
        $(obj).addClass('active');

        // Lấy href của tab để show content tương ứng
        var id = $(obj).find('a').attr('href');

        // Ẩn hết nội dung các tab đang hiển thị
        $('.info-page__tab-content__tab--tabcontent').hide();

        // Hiển thị nội dung của tab hiện tại
        $(id).show();
    }

    // Sự kiện click đổi tab
    $('.info-page__tab-content__tab div').click(function() {
        activeTab(this);
        return false;
    });

    // Active tab đầu tiên khi trang web được chạy
    activeTab($('.info-page__tab-content__tab div:first-child'));
    $('.info-page--fas-style').on('click', function() {
        $(this).find('.info-page--fas-style__poster-icon')
            .toggleClass('fa-play')
            .toggleClass('fa-pause');

    });
    showInfoPoster = function() {
        $('.info-page__header__btn-group').find('.info-page--fas-style__poster-icon')
            .toggleClass('fa-play')
            .toggleClass('fa-pause');
    };
    $('.info-page__header__btn-group--img').on('click', showInfoPoster);
    $('.info-page__header__poster-info--name').on('click', showInfoPoster);


    //==================CAROUSEL===================
    $('.owl-custom').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        navText: [
            `<i class="fas fa-chevron-left prev-btn"></i>`,
            `<i class="fas fa-chevron-right next-btn"></i>`
        ],
        dots: false,    
        responsive: {
            0:{
                items:2,
                slideBy: 2,
                nav:false
            },
            600:{
                items:4,
                slideBy: 4
            },
            1000:{
                items:6,
                slideBy: 6
            }
        },
    })
});