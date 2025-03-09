var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 0,
    freeMode: true,
    watchSlidesProgress: true,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
},
navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
breakpoints: {
    575: {slidesPerView: 2,spaceBetween: 10,},
    640: {slidesPerView: 2,spaceBetween: 10,},
    767: {slidesPerView: 3,spaceBetween: 10,},
    1024: {slidesPerView: 4,spaceBetween: 10,},
    1199: {slidesPerView: 5,spaceBetween: 10,},
    },
});