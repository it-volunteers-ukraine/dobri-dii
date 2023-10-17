console.log("home page");

const swiperProjects = new Swiper(".swiperProjects", {
  slidesPerView: 1,
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 16,
    },
    1380: {
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

