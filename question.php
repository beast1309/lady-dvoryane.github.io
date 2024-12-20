<?php
ini_set('display__errors', 'On');
/* error_reporting('E_ALL'); */

$to = 'https://e.mail.ru/inbox/slupitskey@mail.ru';
$siteName = $_SERVER['SERVER_NAME'];
$name = strip_tags($_POST['name']);
$mail = strip_tags($_POST['mail']);
$question = strip_tags($_POST['question']);

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $subject = "[Zaiavka s sajta '.$siteName.']";
    $headers = "From mail@ '.$siteName.' \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

    $msg = "<html><body style='font-family:Arial, sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новый вопрос:</h2>\r\n";

    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $msg .= "<p><strong>Имя:</strong>.$name.</p>\r\n";
    }

    if (isset($_POST['mail']) && !empty($_POST['mail'])) {
        $msg .= "<p><strong>Почта:</strong>.$mail.</p>\r\n";
    }

    if (isset($_POST['question']) && !empty($_POST['question'])) {
        $msg .= "<p><strong>Вопрос:</strong>.$question.</p>\r\n";
    }

    $msg .= "</body></html>";

    mail($to, $subject, $msg, $headers);
} else {
    echo "false";
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Neucha&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Pangolin&family=Rubik+Dirt&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>

    <div class="wrapper">
        <header class="header">
            <nav class="header__nav">
                <a class="header__nav-link --active" href="#">главная</a>
                <a class="header__nav-link" href="pets.html">подопечные</a>
                <a class="header__nav-link" href="contacts.html">контакты</a>
            </nav>
            <a class="header__logo" href="#">
                <img class="header__logo-image" src="images/header-logo.png" alt="">
            </a>
            <button class="header__btn btn" id="questionBtn">задать вопрос</button>
        </header>
        <main class="main">
            <div class="questionForm">
                <div class="questionForm__inner" style="background-image: url('./images/question-form-paw.png');">
                    <button class="questionForm__close closeBtn" id="closeBtn">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.0001 26L26.0001 16M26.0001 26L16.0001 16" stroke="#67C8FF" stroke-width="2"
                                stroke-linecap="round" />
                            <path
                                d="M31 38.3244C28.0583 40.0261 24.6428 41 21 41C9.9544 41 1 32.0457 1 21C1 9.9544 9.9544 1 21 1C32.0457 1 41 9.9544 41 21C41 24.6428 40.0261 28.0583 38.3244 31"
                                stroke="#67C8FF" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>

                    <form class="questionForm__form" action="question.php" method="post" id="questionForm">
                        <input class="questionForm__form-input" name="name" type="text" placeholder="Ваше имя" required>
                        <input class="questionForm__form-input" name="mail" type="email" placeholder="Ваш e-mail"
                            required>
                        <textarea class="questionForm__form-textarea" name="question" id="" placeholder="Текст вопроса"
                            required></textarea>
                        <button class="questionForm__form-btn btn" id="questionBtnSubmit">задать вопрос</button>
                    </form>
                </div>
            </div>
            <section class="team">
                <div class="container">
                    <div class="team__inner">
                        <h3 class="team__title section__title">Наша команда</h3>
                        <div class="team__list">
                            <div class="team__list-item wow animate__animated animate__rollIn">
                                <img class="team__list-item__photo" src="images/user-photo.png" alt="">
                                <p class="team__list-item__name">Милена
                                    <span class="team__list-item__role">Основатель</span>
                                </p>
                                <img class="team__list-item__image wow animate__animated animate__wobble animate__delay-1s"
                                    src="images/paw.png" alt="">
                            </div>
                            <div class="team__list-item wow animate__animated animate__rollIn" data-wow-offset="200">
                                <img class="team__list-item__photo" src="images/user-photo.png" alt="">
                                <p class="team__list-item__name">Оксана
                                    <span class="team__list-item__role">Волонтёр</span>
                                </p>
                                <img class="team__list-item__image wow animate__animated animate__wobble animate__delay-1s"
                                    src="images/paw.png" alt="">
                            </div>
                            <div class="team__list-item wow animate__animated animate__rollIn" data-wow-offset="200">
                                <img class="team__list-item__photo" src="images/user-photo.png" alt="">
                                <p class="team__list-item__name">Дарья
                                    <span class="team__list-item__role">Волонтёр</span>
                                </p>
                                <img class="team__list-item__image wow animate__animated animate__wobble animate__delay-1s"
                                    src="images/paw.png" alt="">
                            </div>
                            <div class="team__list-item wow animate__animated animate__rollIn" data-wow-offset="200">
                                <img class="team__list-item__photo" src="images/user-photo.png" alt="">
                                <p class="team__list-item__name">Ксения
                                    <span class="team__list-item__role">Волонтёр</span>
                                </p>
                                <img class="team__list-item__image wow animate__animated animate__wobble animate__delay-1s"
                                    src="images/paw.png" alt="">
                            </div>
                            <div class="team__list-item wow animate__animated animate__rollIn" data-wow-offset="200">
                                <img class="team__list-item__photo" src="images/user-photo.png" alt="">
                                <p class="team__list-item__name">Екатерина
                                    <span class="team__list-item__role">Волонтёр</span>
                                </p>
                                <img class="team__list-item__image wow animate__animated animate__wobble animate__delay-1s"
                                    src="images/paw.png" alt="">
                            </div>
                            <div class="team__list-item wow animate__animated animate__rollIn" data-wow-offset="200">
                                <img class="team__list-item__photo" src="images/user-photo.png" alt="">
                                <p class="team__list-item__name">Светлана
                                    <span class="team__list-item__role">Волонтёр</span>
                                </p>
                                <img class="team__list-item__image wow animate__animated animate__wobble animate__delay-1s"
                                    src="images/paw.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="animateOne">
                <div class="container">
                    <div class="animateOne__inner" style="background-image: url('./images/animateOne/firstCat.png');">
                        <img class="animateOne__highlight wow animate__animated animate__shakeX animate__infinite"
                            data-wow-duration="2.5s" src="images/animateOne/highlight-1.png" alt="">
                        <img class="animateOne__highlight wow animate__animated animate__shakeX animate__infinite"
                            data-wow-duration="2.5s" src="images/animateOne/highlight-2.png" alt="">
                        <img class="animateOne__highlight wow animate__animated animate__pulse animate__infinite"
                            data-wow-duration="4s" src="images/animateOne/star-3.png" alt="">
                        <img class="animateOne__highlight wow animate__animated animate__pulse animate__infinite"
                            data-wow-duration="3s" src="images/animateOne/star-4.png" alt="">
                        <img class="animateOne__highlight wow animate__animated animate__pulse animate__infinite"
                            data-wow-duration="3s" src="images/animateOne/star-4.png" alt="">
                        <img class="animateOne__highlight wow animate__animated animate__pulse animate__infinite"
                            data-wow-duration="2s" src="images/animateOne/star-4.png" alt="">
                        <svg class="animateOne__rainbow" width="501" height="33" viewBox="0 0 501 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <line class="line" x1="0.86792" y1="2.09863" x2="500.867" y2="2.09863" stroke="#F5DBB6"
                                stroke-width="4" />
                            <line class="line" x1="0.868896" y1="6.09863" x2="500.868" y2="6.09863" stroke="#6873A0"
                                stroke-width="4" />
                            <line class="line" x1="0.86792" y1="10.0986" x2="500.867" y2="10.0986" stroke="#68A3A0"
                                stroke-width="4" />
                            <line class="line" x1="0.867432" y1="18.0986" x2="500.866" y2="18.0986" stroke="#C2AF6D"
                                stroke-width="4" />
                            <line class="line" x1="0.868164" y1="14.0986" x2="500.867" y2="14.0986" stroke="#FDC651"
                                stroke-width="4" />
                            <path class="line" d="M0.868896 22.0986L500.868 22.0986" stroke="#EDA76B"
                                stroke-width="4" />
                            <path class="line" d="M0.86792 26.0986L500.867 26.0986" stroke="#F35844" stroke-width="4" />
                            <path class="line" d="M0.868164 30.0986L500.867 30.0986" stroke="#B47679"
                                stroke-width="4" />
                        </svg>
                        <p class="animateOne__text">Пример текста Пример текста Пример текста Пример текста Пример
                            текста Пример
                            текста Пример текста Пример текста Пример текста Пример текста Пример текста Пример текста
                            Пример
                            текста Пример текста Пример текста Пример текста Пример текста Пример текста</p>
                    </div>
                </div>
            </section>
            <section class="founded">
                <div class="container">
                    <div class="founded__inner">
                        <h3 class="founded__title section__title">Нашли свою семью</h3>
                        <div class="founded__swiper swiper">
                            <div class="founded__swiper-wrapper swiper-wrapper">
                                <div class="founded__swiper-slide swiper-slide">
                                    <img class="founded__swiper-slide__photo" src="images/swiper/slide-1.png" alt="">
                                    <p class="founded__swiper-slide__text">Лаки</p>
                                </div>
                                <div class="founded__swiper-slide swiper-slide">
                                    <img class="founded__swiper-slide__photo" src="images/swiper/slide-2.png" alt="">
                                    <p class="founded__swiper-slide__text">Чувачок</p>
                                </div>
                                <div class="founded__swiper-slide swiper-slide">
                                    <img class="founded__swiper-slide__photo" src="images/swiper/slide-3.png" alt="">
                                    <p class="founded__swiper-slide__text">Штирлиц</p>
                                </div>
                                <div class="founded__swiper-slide swiper-slide">
                                    <img class="founded__swiper-slide__photo" src="images/swiper/slide-1.png" alt="">
                                    <p class="founded__swiper-slide__text">Лаки</p>
                                </div>
                                <div class="founded__swiper-slide swiper-slide">
                                    <img class="founded__swiper-slide__photo" src="images/swiper/slide-2.png" alt="">
                                    <p class="founded__swiper-slide__text">Чувачок</p>
                                </div>
                                <div class="founded__swiper-slide swiper-slide">
                                    <img class="founded__swiper-slide__photo" src="images/swiper/slide-3.png" alt="">
                                    <p class="founded__swiper-slide__text">Штирлиц</p>
                                </div>
                            </div>
                            <div class="founded__swiper-navigation swiper-button-prev">
                                <img class="founded__swiper-navigation__prev" src="images/swiper/prevSlide.svg" alt="">
                            </div>
                            <div class="founded__swiper-navigation swiper-button-next">
                                <img class="founded__swiper-navigation__next" src="images/swiper/nextSlide.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="homeless">
                <div class="container">
                    <div class="homeless__inner">
                        <h3 class="homeless__title section__title">Они ищут новый дом</h3>
                        <ul class="homeless__list">
                            <li class="homeless__list-item">
                                <a class="homeless__list-link" id="1" href="card-1.html">
                                    <img class="homeless__list-link__img" src="images/content/homeless-2.png" alt="">
                                    <p class="homeless__list-link__name">Хуан</p>
                                </a>
                            </li>
                            <li class="homeless__list-item">
                                <a class="homeless__list-link" id="0" href="card-2.html">
                                    <img class="homeless__list-link__img" src="images/content/homeless-1.png" alt="">
                                    <p class="homeless__list-link__name">Чувачок</p>
                                </a>
                            </li>
                            <li class="homeless__list-item">
                                <a class="homeless__list-link" id="2" href="card-3.html">
                                    <img class="homeless__list-link__img" src="images/content/homeless-3.png" alt="">
                                    <p class="homeless__list-link__name">Лаки</p>
                                </a>
                            </li>
                            <li class="homeless__list-item">
                                <a class="homeless__list-link" id="3" href="card-4.html">
                                    <img class="homeless__list-link__img" src="images/content/homeless-4.png" alt="">
                                    <p class="homeless__list-link__name">Мистер Котёнок</p>
                                </a>
                            </li>
                            <li class="homeless__list-item">
                                <a class="homeless__list-link" id="4" href="card-5.html">
                                    <img class="homeless__list-link__img" src="images/content/homeless-5.png" alt="">
                                    <p class="homeless__list-link__name">Котолик</p>
                                </a>
                            </li>
                            <li class="homeless__list-item">
                                <a class="homeless__list-link" id="5" href="card-6.html">
                                    <img class="homeless__list-link__img" src="images/content/homeless-6.png" alt="">
                                    <p class="homeless__list-link__name">Штирлиц</p>
                                </a>
                            </li>
                        </ul>
                        <a class="homeless__btn btn" id="petsLink" href="#">больше питомцев</a>
                    </div>
                </div>
            </section>
            <section class="callback">
                <div class="container">
                    <div class="callback__inner">
                        <h3 class="callback__title section__title">Связаться с нами</h3>
                        <div class="callback__info">
                            <div class="callback__info-left">
                                <a class="callback__info-left__link" href="tel:+79996661337">+7 (999) 666-13-37</a>
                                <a class="callback__info-left__link" href="tel:+79996661337">+7 (999) 666-13-37</a>
                            </div>
                            <div class="callback__info-right">
                                <a class="callback__info-right__link" href="#">vk.com/exampleGroup
                                    <svg width="40" height="24" viewBox="0 0 40 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M33.8502 14.9521C35.1242 16.1959 36.4687 17.3661 37.6113 18.7353C38.1161 19.3437 38.5939 19.9716 38.9594 20.6777C39.4774 21.6814 39.0083 22.7861 38.1083 22.846L32.5134 22.8434C31.0703 22.9632 29.9192 22.3822 28.9513 21.3956C28.1767 20.6065 27.4594 19.7668 26.7145 18.9512C26.4092 18.6178 26.0895 18.3042 25.7077 18.0562C24.944 17.5604 24.281 17.7122 23.8445 18.5089C23.4 19.3191 23.2991 20.2162 23.2555 21.1192C23.1956 22.4367 22.7974 22.783 21.474 22.8433C18.6457 22.9767 15.9616 22.5489 13.468 21.1221C11.2698 19.8643 9.56505 18.0886 8.08122 16.0784C5.19222 12.1643 2.97986 7.86309 0.991567 3.44134C0.543987 2.44516 0.871332 1.9104 1.97048 1.89141C3.79572 1.85594 5.62066 1.85852 7.44801 1.88883C8.18981 1.89969 8.68091 2.32516 8.96739 3.02603C9.9549 5.45417 11.1633 7.76434 12.6799 9.9056C13.0838 10.4757 13.4956 11.0458 14.0822 11.447C14.731 11.8913 15.225 11.744 15.5302 11.0213C15.7239 10.563 15.8087 10.0694 15.8524 9.57857C15.997 7.88988 16.016 6.20401 15.7624 4.52135C15.6067 3.47111 15.0152 2.79134 13.9672 2.59251C13.4324 2.49118 13.512 2.29219 13.7709 1.98696C14.2206 1.46055 14.6437 1.13281 15.4867 1.13281H21.8098C22.8052 1.3293 23.0263 1.77649 23.1626 2.77806L23.1679 9.80177C23.1571 10.1896 23.3616 11.3402 24.0601 11.5969C24.619 11.7796 24.9875 11.3324 25.3229 10.9779C26.8369 9.37114 27.9173 7.47223 28.8826 5.50589C29.311 4.64127 29.6793 3.74338 30.0363 2.84626C30.3007 2.18055 30.7157 1.85289 31.4657 1.8675L37.5513 1.87289C37.7318 1.87289 37.9144 1.87555 38.0891 1.90547C39.1146 2.08024 39.3956 2.52141 39.0789 3.52275C38.5799 5.09385 37.6088 6.40308 36.6595 7.7184C35.6447 9.12263 34.5592 10.4789 33.5528 11.8915C32.6282 13.1815 32.7016 13.8318 33.8502 14.9521Z"
                                            fill="#62A2FB" />
                                        <path
                                            d="M20.5259 23.6634C17.6878 23.6635 15.2414 23.0552 13.0721 21.8142C11.0075 20.6329 9.21789 18.9608 7.43991 16.5522C4.9149 13.1307 2.70191 9.18813 0.264711 3.76864C-0.0762282 3.00973 -0.0878689 2.37106 0.230024 1.87027C0.547447 1.37027 1.12831 1.10957 1.95652 1.09527C3.71247 1.06113 5.51365 1.06035 7.46116 1.09277C8.48335 1.10777 9.2807 1.68738 9.70485 2.72512C10.7348 5.25764 11.9205 7.45554 13.3299 9.44563C13.6828 9.9436 14.0478 10.4588 14.532 10.79L14.5343 10.7916C14.6258 10.8541 14.7514 10.8171 14.7947 10.7152L14.7961 10.7119C14.9306 10.3939 15.0138 10.0116 15.0585 9.50852C15.2191 7.63484 15.1924 6.08725 14.9743 4.6406C14.8639 3.89599 14.5077 3.50653 13.8186 3.37583C13.6229 3.3388 13.0271 3.22591 12.8271 2.66036C12.6294 2.10145 13.0173 1.64426 13.1634 1.47207C13.6679 0.881439 14.2971 0.33667 15.4867 0.33667H21.8098C21.8587 0.33667 21.9084 0.340889 21.9565 0.350264C23.5491 0.661594 23.8156 1.66769 23.9521 2.67129C23.9569 2.70668 23.9594 2.74239 23.9594 2.77809L23.9648 9.8018C23.9648 9.80946 23.9647 9.81712 23.9645 9.82485C23.9604 9.97071 23.9999 10.1785 24.0601 10.3693C24.1437 10.6341 24.483 10.7096 24.6728 10.5069C24.6738 10.5058 24.6749 10.5046 24.676 10.5035L24.7442 10.431C26.2772 8.80391 27.335 6.85101 28.1675 5.15545C28.6026 4.27716 28.9781 3.3513 29.2961 2.55239C29.6935 1.55207 30.4225 1.05386 31.4735 1.07144L37.5521 1.07683C37.7615 1.07683 37.9865 1.08019 38.2236 1.12082C38.709 1.20355 39.3979 1.38402 39.7695 1.99285C40.141 2.6016 39.9869 3.29505 39.8386 3.76364C39.3195 5.39803 38.3505 6.73913 37.4134 8.03625L37.3056 8.18547C36.8252 8.85008 36.3241 9.51094 35.8395 10.15C35.2942 10.8689 34.7305 11.6124 34.2017 12.3546C33.848 12.848 33.6943 13.1818 33.7168 13.4068C33.7397 13.6357 33.9588 13.9457 34.4065 14.3823L34.4067 14.3825C34.7395 14.7075 35.0851 15.0347 35.4192 15.3512C36.3699 16.2516 37.3529 17.1826 38.223 18.2254C38.7023 18.803 39.2471 19.5011 39.667 20.312C40.0695 21.0922 40.0754 21.972 39.6831 22.6667C39.3574 23.2436 38.8026 23.5988 38.1609 23.6416C38.1433 23.6427 38.1256 23.6433 38.108 23.6433C38.108 23.6433 38.1078 23.6433 38.1077 23.6433L32.5447 23.6407C30.9965 23.7597 29.5967 23.192 28.3824 21.9541C27.8455 21.4073 27.333 20.834 26.8375 20.2794C26.6047 20.0191 26.3641 19.7498 26.126 19.489C25.891 19.2326 25.6053 18.9404 25.2735 18.7249C25.092 18.6071 24.9288 18.5508 24.8368 18.5737C24.7502 18.5954 24.6404 18.7145 24.5431 18.8921C24.195 19.5265 24.0947 20.2566 24.0511 21.158C23.9734 22.8634 23.2609 23.5599 21.5099 23.6396C21.1771 23.6555 20.8487 23.6634 20.5259 23.6634ZM1.5973 2.73848C1.60503 2.80278 1.63183 2.92286 1.71831 3.11528C4.107 8.42703 6.26709 12.2792 8.72226 15.6057C10.3641 17.8301 11.9978 19.3634 13.8636 20.4309C16.0084 21.658 18.4851 22.1866 21.4364 22.0478C22.0505 22.0198 22.2346 21.9277 22.2897 21.8754C22.3318 21.8355 22.4324 21.6784 22.4595 21.0833C22.5066 20.1104 22.6222 19.0806 23.1459 18.1259C23.5502 17.3881 24.0768 17.1218 24.4474 17.0283C24.8219 16.9339 25.4199 16.9198 26.1414 17.3882C26.6234 17.7011 26.9985 18.082 27.3019 18.4134C27.5466 18.6813 27.7902 18.9539 28.0257 19.2173C28.509 19.7581 29.0088 20.3173 29.5197 20.8377C30.4204 21.7557 31.3517 22.1409 32.4474 22.0496C32.4692 22.0478 32.4912 22.0469 32.5131 22.0469C32.5133 22.0469 32.5135 22.0469 32.5137 22.0469L38.0754 22.0495C38.1242 22.0436 38.2188 22.0187 38.2956 21.8829C38.3893 21.7168 38.4341 21.3973 38.2513 21.0433C37.9016 20.3677 37.4215 19.7547 36.9981 19.2441C36.1892 18.2748 35.2829 17.4165 34.3234 16.5077C33.9851 16.1872 33.6351 15.8558 33.2938 15.5226C31.8495 14.1139 31.7478 13.0422 32.9051 11.4276C33.4465 10.6678 34.0174 9.91485 34.5698 9.18664C35.049 8.55469 35.5444 7.90132 36.0137 7.25195L36.1216 7.10249C37.0248 5.85233 37.8781 4.67154 38.3195 3.28177C38.4072 3.00458 38.4081 2.87176 38.4041 2.82559C38.3647 2.80075 38.2452 2.74059 37.9552 2.69114C37.8406 2.67153 37.693 2.66989 37.5513 2.66989L31.465 2.6645C31.4601 2.6645 31.4552 2.6645 31.4502 2.66434C31.0919 2.65676 30.9418 2.7252 30.7768 3.14075C30.447 3.96935 30.0569 4.9306 29.5965 5.85991C28.713 7.65953 27.5821 9.74219 25.9028 11.5246L25.8392 11.5923C25.4823 11.9735 24.8174 12.6829 23.8125 12.3545C23.8034 12.3514 23.7942 12.3483 23.7852 12.345C22.6813 11.9394 22.3571 10.4599 22.3711 9.79266L22.3658 2.83372C22.3304 2.5852 22.2727 2.26723 22.1716 2.1327C22.1477 2.10106 22.0782 2.00855 21.7271 1.9298H15.4868C15.2324 1.9298 15.049 1.96512 14.8864 2.0498C15.8022 2.46528 16.3836 3.27864 16.5506 4.40466C16.7875 5.97631 16.8179 7.64265 16.6463 9.64672C16.5862 10.3222 16.4649 10.8568 16.2642 11.3316C15.9531 12.0681 15.4912 12.3392 15.1584 12.4368C14.8257 12.5343 14.291 12.5559 13.632 12.1046C12.9126 11.6124 12.423 10.9215 12.0297 10.3663C10.5485 8.27508 9.30547 5.97233 8.22929 3.3263C8.00148 2.76887 7.70061 2.68957 7.43639 2.68567C5.50646 2.65348 3.72411 2.65434 1.98597 2.68809C1.77722 2.69215 1.65824 2.71848 1.5973 2.73848Z"
                                            fill="#3765A3" />
                                        <path
                                            d="M5.10063 6.40903C4.80962 6.40903 4.52907 6.24903 4.38883 5.97153C4.26961 5.73567 4.15149 5.4991 4.03438 5.26207C3.83946 4.86754 4.00133 4.38964 4.39586 4.1948C4.79063 3.9998 5.26821 4.16183 5.46314 4.55629C5.57806 4.78894 5.69408 5.02113 5.81111 5.2527C6.00955 5.64543 5.85212 6.12465 5.45939 6.32325C5.34415 6.38145 5.22142 6.40903 5.10063 6.40903Z"
                                            fill="#3765A3" />
                                        <path
                                            d="M10.1685 14.789C9.92421 14.789 9.68303 14.677 9.52678 14.4653C8.17849 12.6385 6.91935 10.6584 5.67746 8.41175C5.46457 8.02667 5.60426 7.54183 5.98934 7.32893C6.37442 7.11612 6.85927 7.25565 7.07216 7.64081C8.27998 9.8259 9.50233 11.7487 10.8089 13.5189C11.0702 13.873 10.995 14.3719 10.641 14.6331C10.4987 14.7384 10.3329 14.789 10.1685 14.789Z"
                                            fill="#3765A3" />
                                    </svg>
                                </a>
                                <a class="callback__info-right__link" href="#">telegram.com/exampleGroup
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 0C8.95422 0 0 8.95422 0 20C0 31.0458 8.95422 40 20 40C31.0458 40 40 31.0458 40 20C40 8.95422 31.0458 0 20 0Z"
                                            fill="#40B3E0" />
                                        <path
                                            d="M29.7317 11.5048L26.1595 29.5152C26.1595 29.5152 25.66 30.7643 24.2861 30.1648L16.0426 23.8448L13.0451 22.396L7.99921 20.6973C7.99921 20.6973 7.22483 20.4226 7.14983 19.8231C7.07499 19.2235 8.02421 18.8988 8.02421 18.8988L28.083 11.0301C28.083 11.0301 29.7317 10.3057 29.7317 11.5048Z"
                                            fill="white" />
                                        <path
                                            d="M15.4091 29.3131C15.4091 29.3131 15.1684 29.2906 14.8686 28.3412C14.5689 27.392 13.0452 22.3961 13.0452 22.3961L25.1603 14.7023C25.1603 14.7023 25.8599 14.2776 25.8349 14.7023C25.8349 14.7023 25.9597 14.7771 25.585 15.1268C25.2103 15.4767 16.0677 23.695 16.0677 23.695"
                                            fill="#D2E5F1" />
                                        <path
                                            d="M19.2033 26.268L15.9427 29.2409C15.9427 29.2409 15.6878 29.4343 15.4089 29.313L16.0333 23.791"
                                            fill="#B5CFE4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <button class="callback__info-btn btn" id="questionBtn">задать вопрос</button>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="footer__inner">
                <div class="footer__info">
                    <a class="footer__info-logo" href="#">
                        <img class="footer__info-logo__image" src="images/footer-logo.png" alt="">
                    </a>
                    <div class="footer__info-social">
                        <p class="footer__info-social__title">социальные сети</p>
                        <a class="footer__info-social__link" href="#">
                            <svg width="40" height="24" viewBox="0 0 40 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M33.8502 14.9521C35.1242 16.1959 36.4687 17.3661 37.6113 18.7353C38.1161 19.3437 38.5939 19.9716 38.9594 20.6777C39.4774 21.6814 39.0083 22.7861 38.1083 22.846L32.5134 22.8434C31.0703 22.9632 29.9192 22.3822 28.9513 21.3956C28.1767 20.6065 27.4594 19.7668 26.7145 18.9512C26.4092 18.6178 26.0895 18.3042 25.7077 18.0562C24.944 17.5604 24.281 17.7122 23.8445 18.5089C23.4 19.3191 23.2991 20.2162 23.2555 21.1192C23.1956 22.4367 22.7974 22.783 21.474 22.8433C18.6457 22.9767 15.9616 22.5489 13.468 21.1221C11.2698 19.8643 9.56505 18.0886 8.08122 16.0784C5.19222 12.1643 2.97986 7.86309 0.991567 3.44134C0.543987 2.44516 0.871332 1.9104 1.97048 1.89141C3.79572 1.85594 5.62066 1.85852 7.44801 1.88883C8.18981 1.89969 8.68091 2.32516 8.96739 3.02603C9.9549 5.45417 11.1633 7.76434 12.6799 9.9056C13.0838 10.4757 13.4956 11.0458 14.0822 11.447C14.731 11.8913 15.225 11.744 15.5302 11.0213C15.7239 10.563 15.8087 10.0694 15.8524 9.57857C15.997 7.88988 16.016 6.20401 15.7624 4.52135C15.6067 3.47111 15.0152 2.79134 13.9672 2.59251C13.4324 2.49118 13.512 2.29219 13.7709 1.98696C14.2206 1.46055 14.6437 1.13281 15.4867 1.13281H21.8098C22.8052 1.3293 23.0263 1.77649 23.1626 2.77806L23.1679 9.80177C23.1571 10.1896 23.3616 11.3402 24.0601 11.5969C24.619 11.7796 24.9875 11.3324 25.3229 10.9779C26.8369 9.37114 27.9173 7.47223 28.8826 5.50589C29.311 4.64127 29.6793 3.74338 30.0363 2.84626C30.3007 2.18055 30.7157 1.85289 31.4657 1.8675L37.5513 1.87289C37.7318 1.87289 37.9144 1.87555 38.0891 1.90547C39.1146 2.08024 39.3956 2.52141 39.0789 3.52275C38.5799 5.09385 37.6088 6.40308 36.6595 7.7184C35.6447 9.12263 34.5592 10.4789 33.5528 11.8915C32.6282 13.1815 32.7016 13.8318 33.8502 14.9521Z"
                                    fill="#62A2FB" />
                                <path
                                    d="M20.5259 23.6634C17.6878 23.6635 15.2414 23.0552 13.0721 21.8142C11.0075 20.6329 9.21789 18.9608 7.43991 16.5522C4.9149 13.1307 2.70191 9.18813 0.264711 3.76864C-0.0762282 3.00973 -0.0878689 2.37106 0.230024 1.87027C0.547447 1.37027 1.12831 1.10957 1.95652 1.09527C3.71247 1.06113 5.51365 1.06035 7.46116 1.09277C8.48335 1.10777 9.2807 1.68738 9.70485 2.72512C10.7348 5.25764 11.9205 7.45554 13.3299 9.44563C13.6828 9.9436 14.0478 10.4588 14.532 10.79L14.5343 10.7916C14.6258 10.8541 14.7514 10.8171 14.7947 10.7152L14.7961 10.7119C14.9306 10.3939 15.0138 10.0116 15.0585 9.50852C15.2191 7.63484 15.1924 6.08725 14.9743 4.6406C14.8639 3.89599 14.5077 3.50653 13.8186 3.37583C13.6229 3.3388 13.0271 3.22591 12.8271 2.66036C12.6294 2.10145 13.0173 1.64426 13.1634 1.47207C13.6679 0.881439 14.2971 0.33667 15.4867 0.33667H21.8098C21.8587 0.33667 21.9084 0.340889 21.9565 0.350264C23.5491 0.661594 23.8156 1.66769 23.9521 2.67129C23.9569 2.70668 23.9594 2.74239 23.9594 2.77809L23.9648 9.8018C23.9648 9.80946 23.9647 9.81712 23.9645 9.82485C23.9604 9.97071 23.9999 10.1785 24.0601 10.3693C24.1437 10.6341 24.483 10.7096 24.6728 10.5069C24.6738 10.5058 24.6749 10.5046 24.676 10.5035L24.7442 10.431C26.2772 8.80391 27.335 6.85101 28.1675 5.15545C28.6026 4.27716 28.9781 3.3513 29.2961 2.55239C29.6935 1.55207 30.4225 1.05386 31.4735 1.07144L37.5521 1.07683C37.7615 1.07683 37.9865 1.08019 38.2236 1.12082C38.709 1.20355 39.3979 1.38402 39.7695 1.99285C40.141 2.6016 39.9869 3.29505 39.8386 3.76364C39.3195 5.39803 38.3505 6.73913 37.4134 8.03625L37.3056 8.18547C36.8252 8.85008 36.3241 9.51094 35.8395 10.15C35.2942 10.8689 34.7305 11.6124 34.2017 12.3546C33.848 12.848 33.6943 13.1818 33.7168 13.4068C33.7397 13.6357 33.9588 13.9457 34.4065 14.3823L34.4067 14.3825C34.7395 14.7075 35.0851 15.0347 35.4192 15.3512C36.3699 16.2516 37.3529 17.1826 38.223 18.2254C38.7023 18.803 39.2471 19.5011 39.667 20.312C40.0695 21.0922 40.0754 21.972 39.6831 22.6667C39.3574 23.2436 38.8026 23.5988 38.1609 23.6416C38.1433 23.6427 38.1256 23.6433 38.108 23.6433C38.108 23.6433 38.1078 23.6433 38.1077 23.6433L32.5447 23.6407C30.9965 23.7597 29.5967 23.192 28.3824 21.9541C27.8455 21.4073 27.333 20.834 26.8375 20.2794C26.6047 20.0191 26.3641 19.7498 26.126 19.489C25.891 19.2326 25.6053 18.9404 25.2735 18.7249C25.092 18.6071 24.9288 18.5508 24.8368 18.5737C24.7502 18.5954 24.6404 18.7145 24.5431 18.8921C24.195 19.5265 24.0947 20.2566 24.0511 21.158C23.9734 22.8634 23.2609 23.5599 21.5099 23.6396C21.1771 23.6555 20.8487 23.6634 20.5259 23.6634ZM1.5973 2.73848C1.60503 2.80278 1.63183 2.92286 1.71831 3.11528C4.107 8.42703 6.26709 12.2792 8.72226 15.6057C10.3641 17.8301 11.9978 19.3634 13.8636 20.4309C16.0084 21.658 18.4851 22.1866 21.4364 22.0478C22.0505 22.0198 22.2346 21.9277 22.2897 21.8754C22.3318 21.8355 22.4324 21.6784 22.4595 21.0833C22.5066 20.1104 22.6222 19.0806 23.1459 18.1259C23.5502 17.3881 24.0768 17.1218 24.4474 17.0283C24.8219 16.9339 25.4199 16.9198 26.1414 17.3882C26.6234 17.7011 26.9985 18.082 27.3019 18.4134C27.5466 18.6813 27.7902 18.9539 28.0257 19.2173C28.509 19.7581 29.0088 20.3173 29.5197 20.8377C30.4204 21.7557 31.3517 22.1409 32.4474 22.0496C32.4692 22.0478 32.4912 22.0469 32.5131 22.0469C32.5133 22.0469 32.5135 22.0469 32.5137 22.0469L38.0754 22.0495C38.1242 22.0436 38.2188 22.0187 38.2956 21.8829C38.3893 21.7168 38.4341 21.3973 38.2513 21.0433C37.9016 20.3677 37.4215 19.7547 36.9981 19.2441C36.1892 18.2748 35.2829 17.4165 34.3234 16.5077C33.9851 16.1872 33.6351 15.8558 33.2938 15.5226C31.8495 14.1139 31.7478 13.0422 32.9051 11.4276C33.4465 10.6678 34.0174 9.91485 34.5698 9.18664C35.049 8.55469 35.5444 7.90132 36.0137 7.25195L36.1216 7.10249C37.0248 5.85233 37.8781 4.67154 38.3195 3.28177C38.4072 3.00458 38.4081 2.87176 38.4041 2.82559C38.3647 2.80075 38.2452 2.74059 37.9552 2.69114C37.8406 2.67153 37.693 2.66989 37.5513 2.66989L31.465 2.6645C31.4601 2.6645 31.4552 2.6645 31.4502 2.66434C31.0919 2.65676 30.9418 2.7252 30.7768 3.14075C30.447 3.96935 30.0569 4.9306 29.5965 5.85991C28.713 7.65953 27.5821 9.74219 25.9028 11.5246L25.8392 11.5923C25.4823 11.9735 24.8174 12.6829 23.8125 12.3545C23.8034 12.3514 23.7942 12.3483 23.7852 12.345C22.6813 11.9394 22.3571 10.4599 22.3711 9.79266L22.3658 2.83372C22.3304 2.5852 22.2727 2.26723 22.1716 2.1327C22.1477 2.10106 22.0782 2.00855 21.7271 1.9298H15.4868C15.2324 1.9298 15.049 1.96512 14.8864 2.0498C15.8022 2.46528 16.3836 3.27864 16.5506 4.40466C16.7875 5.97631 16.8179 7.64265 16.6463 9.64672C16.5862 10.3222 16.4649 10.8568 16.2642 11.3316C15.9531 12.0681 15.4912 12.3392 15.1584 12.4368C14.8257 12.5343 14.291 12.5559 13.632 12.1046C12.9126 11.6124 12.423 10.9215 12.0297 10.3663C10.5485 8.27508 9.30547 5.97233 8.22929 3.3263C8.00148 2.76887 7.70061 2.68957 7.43639 2.68567C5.50646 2.65348 3.72411 2.65434 1.98597 2.68809C1.77722 2.69215 1.65824 2.71848 1.5973 2.73848Z"
                                    fill="#3765A3" />
                                <path
                                    d="M5.10063 6.40903C4.80962 6.40903 4.52907 6.24903 4.38883 5.97153C4.26961 5.73567 4.15149 5.4991 4.03438 5.26207C3.83946 4.86754 4.00133 4.38964 4.39586 4.1948C4.79063 3.9998 5.26821 4.16183 5.46314 4.55629C5.57806 4.78894 5.69408 5.02113 5.81111 5.2527C6.00955 5.64543 5.85212 6.12465 5.45939 6.32325C5.34415 6.38145 5.22142 6.40903 5.10063 6.40903Z"
                                    fill="#3765A3" />
                                <path
                                    d="M10.1685 14.789C9.92421 14.789 9.68303 14.677 9.52678 14.4653C8.17849 12.6385 6.91935 10.6584 5.67746 8.41175C5.46457 8.02667 5.60426 7.54183 5.98934 7.32893C6.37442 7.11612 6.85927 7.25565 7.07216 7.64081C8.27998 9.8259 9.50233 11.7487 10.8089 13.5189C11.0702 13.873 10.995 14.3719 10.641 14.6331C10.4987 14.7384 10.3329 14.789 10.1685 14.789Z"
                                    fill="#3765A3" />
                            </svg>
                        </a>
                        <a class="footer__info-social__link" href="#">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 0C8.95422 0 0 8.95422 0 20C0 31.0458 8.95422 40 20 40C31.0458 40 40 31.0458 40 20C40 8.95422 31.0458 0 20 0Z"
                                    fill="#40B3E0" />
                                <path
                                    d="M29.7317 11.5048L26.1595 29.5152C26.1595 29.5152 25.66 30.7643 24.2861 30.1648L16.0426 23.8448L13.0451 22.396L7.99921 20.6973C7.99921 20.6973 7.22483 20.4226 7.14983 19.8231C7.07499 19.2235 8.02421 18.8988 8.02421 18.8988L28.083 11.0301C28.083 11.0301 29.7317 10.3057 29.7317 11.5048Z"
                                    fill="white" />
                                <path
                                    d="M15.4091 29.3131C15.4091 29.3131 15.1684 29.2906 14.8686 28.3412C14.5689 27.392 13.0452 22.3961 13.0452 22.3961L25.1603 14.7023C25.1603 14.7023 25.8599 14.2776 25.8349 14.7023C25.8349 14.7023 25.9597 14.7771 25.585 15.1268C25.2103 15.4767 16.0677 23.695 16.0677 23.695"
                                    fill="#D2E5F1" />
                                <path
                                    d="M19.2033 26.268L15.9427 29.2409C15.9427 29.2409 15.6878 29.4343 15.4089 29.313L16.0333 23.791"
                                    fill="#B5CFE4" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="footer__copyright">
                    <p class="footer__copyright-text">lady&dvoryane© 2024</p>
                    <p class="footer__copyright-text">design & development by
                        <a class="footer__copyright-link" href="#">beast1309</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/main.min.js"></script>
</body>

</html>