jQuery(document).ready(function ($) {


    var scroll = $(window).scrollTop();

    if ($("header").length > 0) {
        if (scroll >= 200) {
            $("header").addClass("scrolled");
        }
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 200) {
                $("header").addClass("scrolled");
            } else {
                $("header").removeClass("scrolled");
            }
        });
    }

    // if ($(".is-mobile-header").length > 0) {
    //     if (scroll >= 100) {
    //         $(".is-mobile-header").addClass("scrolled");
    //     }
    //     $(window).scroll(function () {
    //         var scroll = $(window).scrollTop();
    //         if (scroll >= 100) {
    //             $(".is-mobile-header").addClass("scrolled");
    //         } else {
    //             $(".is-mobile-header").removeClass("scrolled");
    //         }
    //     });
    // }

    // if ($(".bottom-header").length > 0) {
    //     if (scroll >= 100) {
    //         $(".bottom-header").addClass("scrolled");
    //     }
    //     $(window).scroll(function () {
    //         var scroll = $(window).scrollTop();
    //         if (scroll >= 100) {
    //             $(".bottom-header").addClass("scrolled");
    //         } else {
    //             $(".bottom-header").removeClass("scrolled");
    //         }
    //     });
    // }

    var swiper = new Swiper(".featured__meeting-rooms-slider", {
        slidesPerView: 2,
        grid: {
          rows: 2,
        },
        spaceBetween: 8,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
            601: {
              slidesPerView: 3,
              spaceBetween: 8,
            },
            769: {
              slidesPerView: 2,
              spaceBetween: 16,
            },
            1025: {
              slidesPerView: 3,
              spaceBetween: 24,
            },
            // 1440: {
            //     slidesPerView: 3,
            //     spaceBetween: 24,
            // },
          },
    });


    var homeswiper = new Swiper(".home-slider-wrapper", {
      slidesPerView: 1,
      spaceBetween: 0,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
      loop: true, // Enable loop mode
    });

    $('.product-single-page__video a').magnificPopup({
      type:"iframe",
    })


    // Get the current date
    var today = new Date();

    // Format the current date as YYYY-MM-DD (the format used by the datepicker)
    var formattedToday = today.toISOString().split('T')[0];

    // Add a class to the datepicker input
    $('.wp-block-calendar input').addClass('disable-past-dates');

    // Set the min attribute to the current date
    $('.disable-past-dates').attr('min', formattedToday);
    
});

mobiscroll.setOptions({
  theme: 'ios',
  themeVariant: 'light'
});


jQuery(document).ready(function ($) {
  $('#demo-calendar').mobiscroll().datepicker({
    controls: ['calendar', 'time'],
    select: 'range',
    display: 'inline',
    ouchUi: true
});
});