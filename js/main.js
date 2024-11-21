$(async function () {
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
        slidesPerView: 3,
        loop: true,
        speed: 500,
        /* centeredSlides: true, */
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            720: {
                centeredSlides: true,
                slidesPerView: 4
            },
            1200: {
                centeredSlides: true,
                slidesPerView: 5
            }
        }
    })

    const cardSwiper = new Swiper('.card__swiper', {
        slidesPerView: 3,
        loop: true,
        speed: 500,
        /* centeredSlides: true, */
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            720: {
                centeredSlides: true,
                slidesPerView: 4
            },
            1200: {
                centeredSlides: true,
                slidesPerView: 5
            }
        }
    })

    $(document.querySelectorAll('#questionBtn')).on('click', function () {
        $('.questionForm').toggleClass('--active')
    })

    $(document.querySelectorAll('#closeBtn')).on('click', function () {
        $('.questionForm').removeClass('--active')
        $('.acceptForm').removeClass('--active')
        $('.header__nav').removeClass('--active')
        $('#burgerBtn').removeClass('--active')
    })

    $(document.querySelectorAll('#acceptBtn')).on('click', function () {
        $('.acceptForm').toggleClass('--active')
    })

    $(document.querySelectorAll('#burgerBtn')).on('click', function () {
        $('.header__nav').toggleClass('--active')
        $('#burgerBtn').toggleClass('--active')
    })

    $(document.getElementById('petsLink').addEventListener('click', function () {
        window.location.replace('http://localhost:3002/pets.html#')
    }))

    async function sendData(data) {
        return await fetch('https://e.mail.ru/inbox/slupitskey@mail.ru', {
            method: 'POST',
            body: data,
        })
    }

    function serializeForm(formNode) {
        const { elements } = formNode
        const data = Array.from(elements)
            .filter((item) => !!item.name)
            .map((element) => {
                const { name, value } = element
                return { name, value }
            })

        console.log(data)
    }

    async function handleFormSubmit(event) {
        event.preventDefault()

        const data = serializeForm(event.target)
        const response = await sendData(data)
    }

    const questionForm = document.getElementById('questionForm')
    questionForm.addEventListener('submit', handleFormSubmit)

});