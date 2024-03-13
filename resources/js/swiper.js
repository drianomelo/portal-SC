// INICIANDO SWIPER

var swiper = new Swiper(".swiperr", {
    loop: true,

    autoplay: {
        delay: 5000,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        1200: {
            slidesPerView: 3,
            spaceBetween: 20,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        }
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

    breakpoints: {
        1200: {
            slidesPerView: 3,
            spaceBetween: 20,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        }
    },
});

var swiperOuvidoria = new Swiper(".swiperOuvidoria", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 6000,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        768: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
    },
});
