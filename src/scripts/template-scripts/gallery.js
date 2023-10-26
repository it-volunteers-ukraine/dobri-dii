const swiperStories = new Swiper(".swiperGallery", {
    spaceBetween: 32,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },
});