$(document).ready(function(){
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

    $('.banner-ads').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        touchDrag: false,
        mouseDrag: false,
        pullDrag: false, 
        autoplayTimeout:3000,
        responsive: {
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:false,
            }
        },
    });

    $('.event-ads').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            `<i class="fas fa-chevron-left prev-btn"></i>`,
            `<i class="fas fa-chevron-right next-btn"></i>`
        ],
        dots: false,
        autoplay: true,
        autoplayTimeout:3000,
        responsive: {
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:true
            },
            1000:{
                items:1,
                nav:true,
            }
        },
    });
});
