<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="app/libraries/animate.css">
    <link rel="stylesheet" type="text/css" href="app/libraries/slick.css" />
    <link rel="stylesheet" type="text/css" href="app/libraries/slick-theme.css" />
    <link rel="stylesheet" href="dist/main.css">
    <title>Document</title>
</head>

<body>

    <div id="overlay">
        <div class="modal modal__consultation" id="intro-modal">
            <div class="modal-container">
                <h3 class="title">Консультація з питань придбання</h3>
    
                <p class="subtitle">
                    Будь ласка, заповніть форму
                </p>
    
                <form action="/mail.php" class="modal__form flex-row-vertical" id="ajax_form">
                    <input type="hidden" name="title" value="Консультация">
                    <label class="modal__label">
                        Ваше ім’я: <sup>*</sup>
                        <input class="modal__input" name="name" type="text" placeholder="Ваше ім’я">
                    </label>
    
                    <label class="modal__label">
                        Ваш телефон: <sup>*</sup>
                        <input class="modal__input" name="phone" type="tel" placeholder="+38 099 999 99 99">
                    </label>
    
                    <label class="modal__label">
                        Ваш e-mail:
                        <input class="modal__input" name="email" type="email" placeholder="Ваш Email">
                    </label>
    
                    <input class="btn" type="submit" value="Надіслати заявку" id="consultBtn">
                </form>
            </div>
            <button class="modal__close">
                <img src="assets/icons/close.png" alt="">
            </button>
        </div>

        <div class="modal modal__partners">
            <div class="modal-container">
                <h3 class="title">Стати партнером</h3>
    
                <p class="subtitle">
                    Будь ласка, заповніть форму
                </p>
    
                <form action="/mail.php" class="modal__form flex-row-vertical" id="ajax_partners">
                    <input type="hidden" name="title" value="Подвал - Стать партнером">
                    <label class="modal__label">
                        Ваше ім’я: <sup>*</sup>
                        <input class="modal__input" name="name" type="text" placeholder="Ваше ім’я">
                    </label>
    
                    <label class="modal__label">
                        Ваш телефон: <sup>*</sup>
                        <input class="modal__input" name="phone" type="tel" placeholder="+38 099 999 99 99">
                    </label>
    
                    <label class="modal__label">
                        Назва компанії: <sup>*</sup>
                        <input class="modal__input" name="company" type="tel" placeholder="Назва">
                    </label>
    
                    <label class="modal__label">
                        Ваш e-mail:
                        <input class="modal__input" name="email" type="email" placeholder="Ваш Email">
                    </label>
    
                    <input class="btn" type="submit" value="Стати партнером">
                </form>
            </div>
            <button class="modal__close" id="close-Partners">
                <img src="assets/icons/close.png" alt="">
            </button>
        </div>
    
        <div class="modal modal__buy">
            <div class="modal-container">
                <h3 class="title">Для придбання</h3>
    
                <p class="subtitle">
                    Будь ласка, заповніть форму
                </p>
    
                <form action="/mail.php" class="modal__form flex-row-vertical" id="ajax_buy">
                    <input type="hidden" name="title" value="РРО - купить">
                    <label class="modal__label">
                        Ваше ім’я: <sup>*</sup>
                        <input class="modal__input" name="name" type="text" placeholder="Ваше ім’я">
                    </label>
    
                    <label class="modal__label">
                        Ваш телефон: <sup>*</sup>
                        <input class="modal__input" name="phone" type="tel" placeholder="+38 099 999 99 99">
                    </label>
    
                    <label class="modal__label">
                        Ваш e-mail:
                        <input class="modal__input" name="email" type="email" placeholder="Ваш Email">
                    </label>
    
                    <input class="btn" type="submit" value="Вiдправити">
                </form> 
            </div>
            <button class="modal__close close-buy-btn">
                <img src="assets/icons/close.png" alt="">
            </button>
        </div>

        <div class="modal" id="form-success">
            <div class="modal-container">
                <h3 class="title title--success">Дякуємо!</h3>
    
                <p class="subtitle subtitle--success">
                    Данi успiшно вiдправленi
                </p>
                
                <button class="btn success__back-btn">Вернутись на сайт</button>
            </div>
        </div>

        <div class="intro__modal-video undisplay">
            <div class="modal__close">
                <img src="assets/icons/close.png" alt="">
            </div>
        </div>
    </div>


    <header class="header">
        <div class="header-container">
            <div class="header__logo">
               <a href="#intro"><img src="assets/images/header-logo.png" alt="" class="header__logo-img"></a> 
            </div>

            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="item">
                        <a href="#discount" class="item-link">Акційна пропозиція</a>
                    </li>

                    <li class="item">
                        <a href="#products" class="item-link">Обладнання</a>
                    </li>

                    <li class="item">
                        <a href="#law" class="item-link">Про Закон</a>
                    </li>

                    <li class="item">
                        <a href="#footer" class="item-link">Контакти</a>
                    </li>
                </ul>
            </nav>

            <div class="header__utility">
                <!-- <div class="header__utility--lang">
                    <div class="header__utility-lang-img">
                        <img src="assets/icons/lang.svg" alt="" class="icon">
                    </div>
                    <p class="lang">РУС</p>
                </div> -->

                <div class="header__utility--phone">
                    <a href="tel:+38044-228-74-83"><img src="assets/icons/phone.svg" alt="" class="icon"></a>
                </div>
            </div>

            <div class="header__burger">
                <div class="line line--first anim-btn-1"></div>
                <div class="line line--second anim-btn-2"></div>
            </div>
        </div>
    </header>

    <section class="intro" id="intro">
        <div class="intro__text">
            <h1 class="title intro__title">Касове обладнання</h1>
            <p class="intro__subtitle">для всіх платників єдиного податку ІІ – IV груп</p>
            <button class="btn btn--intro">Безкоштовна консультація</button>

            <button class="play"><img class="triangle" src="assets/icons/triangle.svg" alt=""></button>
        </div>

        <div class="intro__background">
            <img src="assets/images/intro-background.png" alt="">
        </div>

        <div class="circle circle-little wow fadeIn"></div>
        <div class="circle circle-big wow fadeIn"></div>
    </section>

    <section class="about" id="law">
        <div class="flex-container jc-space-between">
            <div class="about__text">
                <h3 class="about__title">ПРО ЗАКОН</h3>

                <p class="about__description">
                    У зв’язку з прийняттям Закону 129-IX (зміни до Закону про РРО) та Змінами у
                    Податковому кодексі України, з’являються
                    нові категорії підприємців, які працюють як ФОП на єдиному податку, що будуть зобов'язані
                    використовувати РРО у
                    2020-2021 рр.
                </p>

                <a href="https://zakon.rada.gov.ua/laws/show/128-20#n6" class="about__more">посилання на джерело</a>
            </div>

            <div class="about__background wow rotateInUpLeft" data-wow-duration="1s">
                <img src="assets/images/about-background.png" alt="">
            </div>
        </div>
    </section>

    <section class="choose">
        <div class="flex-container ai-center jc-space-between full-height full-width">
            <div class="choose__title">
                <h3 class="title wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="0.1s">Чому потрібно звернутись саме до нас?</h3>
            </div>

            <div class="choose__bullets">
                <ul class="choose__bullets-list wow fadeIn" data-wow-delay="0.6s" data-wow-duration="0.8s">
                    <li class="item">
                        <img src="assets/icons/bullets/icon-speed.svg" alt="">
                        <p class="item__title">Швидко</p>
                        <p class="item__description">
                            Реєстрація РРО
                            за 1 годину
                        </p>
                    </li>

                    <li class="item w">
                        <img src="assets/icons/bullets/icon-good.svg" alt="">
                        <p class="item__title">Зручно</p>
                        <p class="item__description">
                            Готовий до
                            реєстрації
                        </p>
                    </li>

                    <li class="item w">
                        <img src="assets/icons/bullets/icon-info.svg" alt="">
                        <p class="item__title">Інформаційна
                            підтримка</p>
                    </li>

                    <li class="item">
                        <img src="assets/icons/bullets/icon-money.svg" alt="">
                        <p class="item__title">Доступно</p>
                        <p class="item__description">
                            Вигідна ціна
                        </p>
                    </li>

                    <li class="item" >
                        <img src="assets/icons/bullets/icon-settings.svg" alt="">
                        <p class="item__title">Сервіс</p>
                        <p class="item__description">
                            Національне покриття
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="news">
        <h5 class="container">
            <div class="news__title">
                <h3 class="title">Нові категорії ФОП, які зобов'язані <br> використовувати РРО</h3>
            </div>

            <article class="article wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="article-wrapper">
                    <h5 class="article-title">До 1 жовтня 2020 р.</h5>
                    <div class="article-subtitle">
                        Платники єдиного податку, ФОП другої - четвертої груп з 19 квітня 2020 р. мають
                        можливість
                        ввести в експлуатацію РРО та
                        в обов’язковому порядку мають почати застосування до 1 жовтня 2020 р.!
                    </div>
                    <p class="article-description">
                        1) у яких обсяг доходу перевищує 1 млн грн протягом календарного року <br>
                        2) у яких обсяг доходу НЕ перевищує 1 млн грн (ФОП 2,3,4 груп), які здійснюють:
                    </p>
                    <ul class="article__bullet-list">
                        <li class="item">
                            <p class="item-text">
                                реалізацію технічно складних побутових товарів, що підлягають гарантійному ремонту
                            </p>
                        </li>

                        <li class="item">
                            <p class="item-text">
                                реалізацію лікарських засобів, виробів медичного призначення та надання платних послуг у
                                сфері охорони здоров’я </p>
                        </li>
                    </ul>
                </div>
            </article>

            <article class="article wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <ul class="article-wrapper">
                    <h5 class="article-title">З 1 Жовтня</h5>

                    <div class="article-subtitle">
                        Платники єдиного податку, ФОП другої - четвертої груп з 19 квітня 2020 р. мають можливість
                        ввести в експлуатацію РРО та
                        в обов’язковому порядку мають почати застосування до 1 січня 2021 р.!

                    </div>

                    <div class="article-description">
                        1) у яких обсяг доходу перевищує 1 млн грн протягом календарного року <br>
                        2) у яких обсяг доходу НЕ перевищує 1 млн грн (ФОП 2,3,4 груп), які здійснюють:
                    </div>

                    <ul class="article__bullet-list">
                        <li class="item">
                            <p class="item-text">
                                реалізацію технічно складних побутових товарів, що підлягають гарантійному ремонту
                            </p>
                        </li>

                        <li class="item">
                            <p class="item-text">
                                реалізацію лікарських засобів, виробів медичного призначення та надання платних послуг у
                                сфері охорони здоров’я
                            </p>
                        </li>
                    </ul>

                    <h5 class="article-title article-title--second">
                        До них додаються
                    </h5>

                    <div class="article__two-column">
                        <ul class="article__bullet-list">
                            <li class="item">
                                <p class="item-text">
                                    реалізацію товарів чи послуг в інтернеті
                                </p>
                            </li>

                            <li class="item">
                                <p class="item-text">
                                    реалізацію ювелірних та побутових виробів з дорогоцінних металів, дорогоцінного
                                    каміння - органогенного утворення та
                                    напівдорогоцінного каміння
                                </p>
                            </li>

                            <li class="item">
                                <p class="item-text">
                                    діяльність ресторанів, кафе, ресторанів швидкого харчування (окрім продажу води,
                                    молока, квасу, масла, живої риби з
                                    автоцистерн, цистерн, бочок та бідонів; страв і безалкогольних напоїв у їдяльнях та
                                    буфетах загальноосвітніхнавчальних
                                    закладах та професійно-технічних навчальних закладах під час освітнього процесу
                                </p>
                            </li>
                        </ul>

                        <ul class="article__bullet-list">
                            <li class="item">
                                <p class="item-text">
                                    роздрібну торгівлю вживаними товарами у магазинах (група 47,79 КВЕД)
                                </p>
                            </li>

                            <li class="item">
                                <p class="item-text">
                                    діяльність туристичних агентств, туроператорів
                                </p>
                            </li>

                            <li class="item">
                                <p class="item-text">
                                    діяльність готелів та інших засобів тимчасового розміщення (група 55.10 КВЕД)
                                </p>
                            </li>

                            <li class="item">
                                <p class="item-text">
                                    реалізацію текстилю (окрім реалізації за готівку на ринках), деталей та приладів для
                                    автотранспортних засобів,
                                    відповідно до переліку, затвердженого Кабінетом Міністрів України
                                </p>
                            </li>
                        </ul>
                    </div>
                    </div>
            </article>
            </div>
    </section>

    <section class="description">
        
        <div class="flex-container jc-space-between">
            <div class="description__text">
                <h5 class="title title--description">Що таке РРО?</h5>
                    <img src="assets/images/description-bg.png" class="descr__img-tablet wow fadeIn" data-wow-duration="1s" data-wow-duration="1s">
                
                <p class="description-definition">
                    Реєстратор розрахункових операцій (РРО) - пристрій або програмно-технічний комплекс, в якому
                    реалізовані фіскальні функції і який призначений для реєстрації розрахункових операцій при продажу
                    товарів (наданні послуг), операцій з купівлі-продажу іноземної валюти та/або реєстрації кількості
                    проданих товарів (наданих послуг). Він використовується при реалізації товарів і послуг за готівкові
                    кошти.
                </p>
            </div>

            <div class="description__background">
                <img src="assets/images/description-bg.png" class="descr__img wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            </div>
        </div>

        <div class="container">
            <div class="title--little">
                <h5 class="title-tooltip">
                    До реєстраторів розрахункових операцій 
                    <span class="tooltip">
                        відносяться:
                        <div class="tooltip-window">
                            <h5 class="tooltip-header">Нові дати</h5>
                            <p class="tooltip-text">
                                до 01 серпня 2020 року відтерміновано впровадження застосування
                                програмних РРО; <br>
                                ⁃ до 01 січня 2021 року відтерміновано застосування РРО та/або програмних
                                РРО для окремих видів діяльності; <br>
                                ⁃ до 01 квітня 2021 року відтерміновано запровадження обов’язкового
                                використання РРО та/або програмних РРО для всіх платників єдиного податку
                                другої – четвертої групи; <br>
                                ⁃ до 01 січня 2021 року відтерміновано застосування санкцій, визначених п. 1 ст.
                                17 Закону про РРО за порушення порядку проведення розрахункових
                                операцій.

                                <a href="https://zakon.rada.gov.ua/laws/show/128-20#n6" class="about__more">посилання на джерело</a>
                            </p>
                        </div>
                    </span>
                </h5> 
            </div>
        </div>

        <div class="flex-container">
            <div class="article__three-column">
                <ul class="article__bullet-list">
                    <li class="item">
                        <p class="item-text">
                            електронний контрольно-касовий апарат
                            (ЕККА/контрольно-касовий апарат)

                        </p>
                    </li>

                    <li class="item">
                        <p class="item-text">
                            електронний контрольно-касовий реєстратор
                            (ЕККР/фіскальний реєстратор) </p>
                    </li>
                </ul>

                <ul class="article__bullet-list">
                    <li class="item">
                        <p class="item-text">
                            комп'ютерно-касова система (ККС)
                        </p>
                    </li>

                    <li class="item">
                        <p class="item-text">
                            електронний таксометр (ЕТ)
                        </p>
                    </li>
                </ul>

                <ul class="article__bullet-list">
                    <li class="item">
                        <p class="item-text">
                            автомат для продажу товарів (послуг) (АТ) і т.п.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <article class="article wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="article-wrapper article-wrapper--wide">
                    <h5 class="article-title">З 19 квітня 2020</h5>
                    <p class="article-subtitle">
                        мають можливість запровадити РРО ФОПи з доходом до 1 млн грн які займаються такою діяльністю:
                    </p>

                    <div class="article__four-column">
                        <ul class="article__bullet-list">
                            <li class="item">
                                <p class="item-text">
                                    продають товари чи послуги в інтернеті
                                </p>
                            </li>

                            <li class="item">
                                <p class="item-text">
                                    торгують складною технікою
                                </p>
                            </li>

                            <li class="item">
                                <p class="item-text">
                                    пункти обміну валют, АЗС
                                </p>
                            </li>
                        </ul>

                        <ul class="article__bullet-list">
                            <li class="item">
                                <p class="item-text">
                                    торгують лікарськими засобами
                                </p>
                            </li>

                            <li class="item">
                                <p class="item-text">
                                    торгують ювелірними виробами
                                </p>
                            </li>

                            <li class="item">
                                <p class="item-text">
                                    торгують уживаними товарами
                                </p>
                            </li>
                        </ul>

                        <ul class="article__bullet-list">
                            <li class="item">
                                <p class="item-text">
                                    працюють у сфері громадського харчування
                                </p>
                            </li>

                            <li class="item">
                                <p class="item-text">
                                    надають туристичні послуги
                                </p>
                            </li>
                        </ul>

                        <ul class="article__bullet-list">
                            <li class="item">
                                <p class="item-text">
                                    надають готельні послуги
                                </p>
                            </li>

                            <li class="item">
                                <p class="item-text">
                                    торгують запчастинами до авто
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <div class="consultation">
        <div class="flex-container jc-space-around">
            <h3 class="title">
                Замовте безкоштовну консультацію з <br> питань придбання РРО
            </h3>

            <button class="btn" id="freeConsultBtn">Отримати консультацію</button>
        </div>
    </div>

    <section class="discount" id="discount">
        <div class="container">
            <article class="article article--discount">
                <div class="article-wrapper">
                    <h5 class="title">Акція!!!</h5>
                    <h5 class="title">Найкраще рішення для курьерської доставки</h5>

                    <p class="discount__subtitle">
                        до 30 квітня 2020 р.
                    </p>

                    <p class="discount__description">
                        ми привеземо вам аппарат <span class="strong"> Мікро ХМ. (WiFi або GPRS) </span> , повністю
                        готовий до
                        роботи, зареєстрований
                        та введений в
                        експлуатацію. Ви просто вмикаєте та починаєте працювати за наданою нами інструкцією. Все просто!
                    </p>

                    <p class="price">Цiна: 4 390 грн</p>

                    <p class="note">
                        * Пропозиція дійсна за умови заключення сервісного контракту.
                    </p>

                    <button class="btn" id="discountBtn">Замовити</button>
                </div>
            </article>
        </div>
    </section>

    <section class="products" id="products">
        <div class="container">
            <h3 class="title">Обладнання / РРО</h3>

            <div class="product__card">

                <div class="product__card-slider mr-36" id="product__slider-1">
                    <div class="slider-item">
                        <img src="assets/images/products/product-1.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-2.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-3.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-4.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-5.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-6.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-7.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-8.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-9.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-10.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-11.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-12.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-13.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-14.jpg" alt="" class="item-img">
                    </div>
                </div>

                <div class="slider-controls">
                    <button class="prev">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="21" cy="21" r="20" fill="white" stroke="#AABDC8" stroke-width="2" />
                            <path d="M23.6923 15.0771L17.2308 21.5387L23.6923 28.0002" stroke="#AABDC8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <button class="next">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle r="20" transform="matrix(-1 0 0 1 21 21)" fill="white" stroke="#AABDC8"
                                stroke-width="2" />
                            <path d="M18.3077 15.0771L24.7693 21.5387L18.3077 28.0002" stroke="#AABDC8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>


                <div class="product__card-description">
                    <div class="product-title">
                        Мікро ХМ. з WiFi
                    </div>

                    <p class="product__description">
                        Новий портативний реєстратор розрахункових операцій (РРО) Мікро ХМ призначений для проведення
                        фіскальних операцій у
                        торгових точках різноманітного призначення. Модель Мікро ХМ має відмінні експлуатаційні
                        властивості, невеликий розмір та
                        сучасний...
                    </p>

                    <p class="product__who">
                        Для кого:
                    </p>

                    <ul class="product__who-list">
                        <li class="item">
                            <p>Виїзна й стаціонарна торгівля</p>
                        </li>
                        <li class="item">
                            <p>Торгівля на ринках та у кіосках</p>
                        </li>
                        <li class="item">
                            <p>Сфера обслуговування</p>
                        </li>
                        <li class="item">
                            <p>Прийом платежів у населення вдома</p>
                        </li>
                    </ul>

                    <div class="product__price">
                        <span class="price-title">Цiна: </span> <span class="price-cost">4 950 грн</span>
                    </div>

                    <div class="btn-container">
                        <button class="btn--lighten" id="productConsult--1">Замовити консультацію</button>
                        <button class="btn" id="buy1">Купити</button>
                    </div>

                </div>
            </div>

            <div class="product__card" id="product__card-2">
                <div class="product__card-description mr-36">
                    <div class="product-title">
                        Мікро ХМ. з WiFi
                    </div>

                    <p class="product__description">
                        Новий портативний реєстратор розрахункових операцій (РРО) Мікро ХМ призначений для проведення
                        фіскальних операцій у
                        торгових точках різноманітного призначення. Модель Мікро ХМ має відмінні експлуатаційні
                        властивості, невеликий розмір та
                        сучасний...
                    </p>

                    <p class="product__who">
                        Для кого:
                    </p>

                    <ul class="product__who-list">
                        <li class="item">
                            <p>Виїзна й стаціонарна торгівля</p>
                        </li>
                        <li class="item">
                            <p>Торгівля на ринках та у кіосках</p>
                        </li>
                        <li class="item">
                            <p>Сфера обслуговування</p>
                        </li>
                        <li class="item">
                            <p>Прийом платежів у населення вдома</p>
                        </li>
                    </ul>

                    <div class="product__price">
                        <span class="price-title">Цiна: </span> <span class="price-cost">4 800 грн</span>
                    </div>

                    <div class="btn-container">
                        <button class="btn--lighten" id="productConsult--2">Замовити консультацію</button>
                        <button class="btn" id="buy2">Купити</button>
                    </div>

                </div>

                <div class="product__card-slider" id="product__slider-2">
                    <div class="slider-item">
                        <img src="assets/images/products/product-14.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-13.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-12.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-11.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-10.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-9.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-8.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-7.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-6.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-5.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-4.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-3.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-2.jpg" alt="" class="item-img">
                    </div>

                    <div class="slider-item">
                        <img src="assets/images/products/product-1.jpg" alt="" class="item-img">
                    </div>
                </div>

                <div class="slider-controls">
                    <button class="prev--2">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="21" cy="21" r="20" fill="white" stroke="#AABDC8" stroke-width="2" />
                            <path d="M23.6923 15.0771L17.2308 21.5387L23.6923 28.0002" stroke="#AABDC8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <button class="next--2">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle r="20" transform="matrix(-1 0 0 1 21 21)" fill="white" stroke="#AABDC8"
                                stroke-width="2" />
                            <path d="M18.3077 15.0771L24.7693 21.5387L18.3077 28.0002" stroke="#AABDC8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section class="feedback">
        <div class="container">
            <form action="/mail.php" class="feedback__form" id="ajax_feedback">
                <input type="hidden" name="title" value="Форма обратной связи">
                <legend class="title feedback__form-title">Зв'яжіться з нами</legend>
                <p class="feedback__form-subtitle">
                    Будь ласка, заповніть форму нижче та отримайте безкоштовну консультацію
                </p>

                <label>
                    <input type="text" name="name" class="form__input" placeholder="Ваше ім’я" id="input-name" required>
                </label>

                <label>
                    <input type="tel" name="phone" class="form__input" placeholder="Ваш телефон" required>
                </label>

                <label>
                    <input type="email" name="email" class="form__input" placeholder="Ваш e-mail" required>
                </label>

                <button class="btn form__submit" id="feedbackBtn">Надiслати</button>
            </form>
        </div>
    </section>

    <div id="result_form"></div>

    <footer class="footer" id="footer">
        <div class="flex-container jc-space-between ai-center">
            <div class="footer__text">
                <h5 class="title">Контакти</h5>

                <p class="footer__address">
                    <em>Адреса:</em> м. Київ, вул. Січових Стрільців, 103
                </p>

                <div class="footer__contacts">
                    <a href="tel:044-228-74-83" class="number"><span class="strong">Телефон: </span>044-228-74-83</a>

                    <div class="email">
                        <span class="strong">Пошта: </span>
                        <a href="mailto:rro@fnt.com.ua" class="email-text">rro@fnt.com.ua</a>
                    </div>

                </div>

                <p class="work-our"><span class="strong">Години роботи:</span> пн - пт 9:00 - 18:00</p>
                <button class="btn--lighten"  id="footer-btn--partners">Стати партнером</button>
            </div>

            <div class="footer-logo">
                <img src="assets/images/footer-logo.png" alt="" class="logo-img">
            </div>
        </div>
    </footer>


    

    <!-- <button id="up"><img src="assets/icons/arrows/arrow-up.png" alt=""></button> -->

    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="app/js/slick/slick.min.js"></script>
    <script src="app/js/wow.min.js"></script>
    <script src="ajax.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="dist/main.js"></script>

</body>

</html>