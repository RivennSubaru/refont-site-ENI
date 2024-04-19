var swiper = new Swiper(".bloc-partenariat",{
    slidesPerView: 3,

    spaceBetween: 25,

    loop: true,

    centeredSlides: true,

    fade: true,

    grabCursor: true,

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});

/* Annimation Caractéristique */
/* window.addEventListener('scroll', function () {
    var paraCaract = document.querySelector('#caract .cara-present');

    var position = paraCaract.getBoundingClientRect();

    if (position.top >= -100000) {
        paraCaract.style.transform = 'translateY(0px)';
        paraCaract.style.opacity = '1';
    }
}); */

