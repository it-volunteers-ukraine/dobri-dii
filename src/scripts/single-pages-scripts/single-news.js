const swiper = new Swiper(".swiperOneNews", {
  slidesPerView: 1,
  watchSlidesProgress: true,

  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 38,
      freeMode: true,
      watchSlidesProgress: true,
    },

    1366: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
  },

  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },

  pagination: {
    el: ".news__pagination",
    clickable: true,
  },
});

const swiperOneNews2 = new Swiper(".swiperOneNews2", {
  spaceBetween: 10,
  thumbs: {
    swiper: swiper,
  },
});

function initializeLightbox() {
  lightbox.option({
    resizeDuration: 200,
    alwaysShowNavOnTouchDevices: true,
    disableScrolling: true,
    wrapAround: true,
    albumLabel: "Слайд %1 з %2",
  });
}

document.addEventListener("DOMContentLoaded", function () {
  initializeLightbox();
});
