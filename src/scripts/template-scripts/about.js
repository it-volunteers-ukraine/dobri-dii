function expandText(button) {
    button.previousElementSibling.classList.add('expanded');
    button.style.display = 'none';
}

const swiperStories = new Swiper(".swiperStories", {
    spaceBetween: 32,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '"></span>';
        },
    },
});
