const swiper=new Swiper(".swiperOneProject",{slidesPerView:1,breakpoints:{768:{slidesPerView:2,spaceBetween:16},1366:{slidesPerView:3,spaceBetween:24}},navigation:{nextEl:".button-next",prevEl:".button-prev"},pagination:{el:".project__pagination",clickable:!0}});function initializeLightbox(){lightbox.option({resizeDuration:200,alwaysShowNavOnTouchDevices:!0,disableScrolling:!0,wrapAround:!0,albumLabel:"Слайд %1 з %2"})}document.addEventListener("DOMContentLoaded",(function(){initializeLightbox()}));