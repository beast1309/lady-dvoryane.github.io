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


    $(document.querySelectorAll('#questionBtn')).on('click', function () {
        $('.questionForm').toggleClass('--active')
    })

    $('#closeBtn').on('click', function () {
        $('.questionForm').removeClass('--active')
    })
});