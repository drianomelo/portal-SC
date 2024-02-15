// INICIANDO SWIPER

var swiper = new Swiper(".swiper", {
    slidesPerView: 3,
    spaceBetween: 20,

    loop: true,
    autoplay: {
        delay: 5000,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiperBanner = new Swiper(".swiperBanner", {
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 4000,
    },
});

var swiperVideos = new Swiper(".swiperVideos", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
