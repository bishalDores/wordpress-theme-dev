$(document).ready(function () {
    $(".clients-wrapper").owlCarousel({
        loop: true,
        slideTransition:'linear',
        autoplay: true,
        autoplayTimeout: 6000,
        // autoplayHoverPause: true,
        autoplaySpeed:2000,
        center: true,
        // nav: true,
        dots: false,
        // navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        margin: 10,
        merger:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:3
            },
            1024:{
                items:5
            }
        }
    });


    $('.banner-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        // slideSpeed: 1000,
        paginationSpeed: 500,
        singleItem: true,
        // autoplayHoverPause: true,
        items: 1,
        nav: false,
    });


});

