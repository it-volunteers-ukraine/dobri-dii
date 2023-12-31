const swiperProjects = new Swiper(".swiperProjects", {
  slidesPerView: 1,
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 16,
    },
    1366: {
      slidesPerView: 3,
      spaceBetween: 24,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '"></span>';
    },
  },
});

const swiperNews = new Swiper(".swiperNews", {
  slidesPerView: 1,
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 16,
    },
    1366: {
      slidesPerView: 3,
      spaceBetween: 24,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '"></span>';
    },
  },
});

const swiperPartners = new Swiper(".swiperPartners", {
  slidesPerView: 4,
  spaceBetween: 23,

  breakpoints: {
    768: {
      slidesPerView: 4,
      spaceBetween: 8,
    },
    1380: {
      slidesPerView: 6,
      spaceBetween: 24,
    },
  },
});
