// ================================= NAVBAR CHANGE COLOR
$(window).on("scroll", function () {
  if ($(window).scrollTop()) {
    $(".header").addClass("white");
  } else {
    $(".header").removeClass("white");
  }
});

// $(window).on("scroll", function () {
//   if ($(window).scrollTop()) {
//     $(".book-now").addClass("booking-scroll");
//   } else {
//     $(".book-now").removeClass("booking-scroll");
//   }
// });

// $(window).on("scroll", function () {
//   var targetPos1 = $("#about").offset().top;
//   var targetPos2 = $("#facilities").offset().top;

//   var scrollPos = $(window).scrollTop();

//   if (scrollPos > targetPos1 || scrollPos > targetPos2) {
//     $(".book-now").addClass("booking-scroll");
//   } else {
//     $(".book-now").removeClass("booking-scroll");
//   }
// });
//================================= PROMO
$(".sajid-1").owlCarousel({
  loop: false,
  margin: 40,
  nav: false,
  autoplay: true,
  autoplayTimeout: 10000,
  // stagePadding: 50,
  dots: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
    1400: {
      items: 3,
    },
  },
});

//==================================== ACTIVITIES
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  autoplay: true,
  autoplayTimeout: 10000,
  stagePadding: 50,
  dots: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 2,
    },
    1400: {
      items: 2,
    },
  },
});
