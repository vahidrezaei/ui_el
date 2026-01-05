var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 7,
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
    575: {slidesPerView: 3,spaceBetween: 20,},
    640: {slidesPerView: 4,spaceBetween: 20,},
    767: {slidesPerView: 5,spaceBetween: 20,},

    },
});