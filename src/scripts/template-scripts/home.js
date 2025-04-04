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

document.addEventListener("DOMContentLoaded", function () {
  const activityItems = document.querySelectorAll(".activities-item");

  activityItems.forEach((item) => {
    const description = item.querySelector(
      ".activities-item_description-wrapper"
    );
    const container = item.querySelector(".hovered-description-container");
    const iconWrapper = item.querySelector(".icon-container");

    if (description && container && iconWrapper) {
      description.style.opacity = "0";
      description.style.transition = "opacity 0.3s ease-in-out";

      item.addEventListener("mouseenter", () => {
        description.style.opacity = "1";
      });

      item.addEventListener("mouseleave", () => {
        description.style.opacity = "0";
      });
    }
  });
});

const swiper = new Swiper(".values-swiper", {
  direction: "horizontal",
  loop: true,
  slidesPerView: 1,
  spaceBetween: 24,
  pagination: {
    el: ".swiper-pagination",
  },
});

function showSwiper() {
  const section = document.querySelector(".values-swiper");
  if (section) {
    if (window.innerWidth <= 769) {
      swiper.init();
    } else {
      swiper.destroy();
    }
  }
}

window.addEventListener("resize", showSwiper);
