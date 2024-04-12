$(document).ready(function($) {

    $('.slideshow').slick({
        slidesToShow: 3,
        prevArrow: "<div class='slick-prev'> <img src='images/arrow-prev.svg'> </div>",
        nextArrow: "<div class='slick-next'> <img src='images/arrow-next.svg'> </div>"
    });

    // Works
    $('.works').slick({
        dots: true,
        arrows: false,
        vertical: true,
        slidesToShow: 1,
        verticalSwiping: true
    });

    $(window).scroll(function(){
        var wScroll = $(this).scrollTop();

        if (wScroll > 100) {
            $('.header').addClass('header-white')
        } else {
            $('.header').removeClass('header-white')
        }
    });

    $('.news').slick({
        slidesToShow: 3,
        prevArrow: "<div class='slick-prev'> <img src='images/arrow-prev-red.svg'> </div>",
        nextArrow: "<div class='slick-next'> <img src='images/arrow-next-red.svg'> </div>",
        responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            },
        ]
    })

})
