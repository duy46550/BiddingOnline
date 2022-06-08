(function ($) {
  "use strict";
  // Sliders Active Code
  if ($.fn.owlCarousel) {
    $(".popular-material-slides").owlCarousel({
      items: 4,
      margin: 10,
      loop: true,
      nav: false,
      dots: false,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 1000,
      responsive: {
        0: {
          items: 1,
        },
        576: {
          items: 2,
        },
        768: {
          items: 3,
        },
        992: {
          items: 4,
        },
      },
    });
  }
})(jQuery);

$('.owl-carousel1').owlCarousel({
  loop: true,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 4000,
  smartSpeed: 1000,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})
