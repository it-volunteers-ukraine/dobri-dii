const swiper = new Swiper(".swiperOneProject", {
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

  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },

  pagination: {
    el: ".project__pagination",
    clickable: true,
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
