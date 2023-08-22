$("#insta-carousel").owlCarousel({
  loop: false,
  nav: true,
  navText: [
    "<i class='fa-solid fa-chevron-left'></i>",
    "<i class='fa-solid fa-chevron-right'></i>",
  ],
  dots: false,
  margin: 0,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 3,
      nav: true,
    },
  },
});

$("#carousel-apoiadores").owlCarousel({
  loop: true,
  nav: false,
  dots: true,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 2500,
  autoplayHoverPause: false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
    },
  },
});

$("#carousel-beneficios").owlCarousel({
  loop: true,
  nav: true,
  dots: false,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 2500,
  autoplayHoverPause: false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 3,
    },
  },
});