$(function () {
    wow = new WOW(
        {
            boxClass: 'wow',      // default
            animateClass: 'animated', // default
            offset: 0,          // default
            mobile: true,       // default
            live: true        // default
        }
    )
    wow.init();

    const foundedSwiper = new Swiper('.founded__swiper', {
        slidesPerView: 5,
        loop: true,
        speed: 500,
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    })

    $(document.querySelectorAll('#questionBtn')).on('click', function () {
        $('.questionForm').toggleClass('--active')
    })

    $('#closeBtn').on('click', function () {
        $('.questionForm').removeClass('--active')
    })
});