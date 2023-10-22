function expandText(button) {
    button.previousElementSibling.classList.add('expanded');
    button.style.display = 'none';
}

const swiperStories = new Swiper(".swiperStories", {
    spaceBetween: 32,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

const swiperReports = new Swiper(".swiperReports", {
    spaceBetween: 40,
    slidesPerView: 2,
    breakpoints: {
        768: {
            slidesPerView: 4,
        }
    },
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },

});
