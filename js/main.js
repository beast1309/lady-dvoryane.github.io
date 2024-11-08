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
        slidesPerView: 5,
        loop: true,
        speed: 500,
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    })

    const cardSwiper = new Swiper('.card__swiper', {
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

    $(document.querySelectorAll('#closeBtn')).on('click', function () {
        $('.questionForm').removeClass('--active')
        $('.acceptForm').removeClass('--active')
    })

    $(document.querySelectorAll('#acceptBtn')).on('click', function () {
        $('.acceptForm').toggleClass('--active')
    })

    /* function loadJSON(src) {
        return fetch(src).then(x => x.json())
    }

    const getPets = await loadJSON('./pets-db.json')
    console.log(getPets)

    class Card {
        constructor(props = {}) {
            this.id = props.id
            this.name = props.name
            this.age = props.age
            this.race = props.race
            this.comment = props.comment
        }
    } */

    $(document.getElementById('petsLink').addEventListener('click', function () {
        window.location.replace('http://localhost:3002/pets.html#')
    }))

    const petsLinks = document.querySelectorAll('.homeless__list-link')
    console.log(petsLinks)

    petsLinks.forEach((item) => {
        /* let index = item.id

        const newCard = new Card({
            id: getPets.pets[index].id,
            name: getPets.pets[index].name,
            age: getPets.pets[index].age,
            race: getPets.pets[index].race,
            comment: getPets.pets[index].comment
        }) */

        item.addEventListener('click', function () {
            window.location.replace('http://localhost:3002/card-1.html#')
        })
    })
    console.log(petName)
});