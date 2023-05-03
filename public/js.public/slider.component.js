const swiper = new Swiper(".swiper", {
    speed: 400,
    allowTouchMove: true,
    autoplay: {
        delay: 5000,
    },
    effect: "cards",
    fadeEffect: {
        crossFade: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
const $swiper = document.querySelector(".swiper").swiper;

// Now you can use all slider methods like
// $swiper.slideNext();
