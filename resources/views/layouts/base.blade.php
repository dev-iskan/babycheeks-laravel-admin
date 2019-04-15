<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Styles --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Babycheeks - Интернет магазин детской одежды от ведущих брендов</title>
</head>

<body>
    <div id="app">
        <div class="main__header box">

            <div class="header__top">
                <nav class="navbar container" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="https://bulma.io">
                            <img src="img/babycheeks-logo.png" width="112" height="28">
                        </a>

                        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                            data-target="navbarBasicExample">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div id="navbarBasicExample" class="navbar-menu">

                        <div class="navbar-center">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input is-rounded" type="email" placeholder="Search">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="header__menu">
                <nav class="navbar">

                    <div id="navMenubd-example" class="navbar-menu">
                        <div class="navbar-center">
                            <div class="navbar-item has-dropdown is-hoverable is-mega">
                                <div class="navbar-link">
                                    Blog
                                </div>
                                <div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">
                                    <div class="container is-fluid">
                                        <div class="columns">
                                            <div class="column">
                                                <h1 class="title is-6 is-mega-menu-title">Sub Menu Title</h1>
                                                <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                                    <div class="navbar-content">
                                                        <p>
                                                            <small class="has-text-info">03 Aug 2017</small>
                                                        </p>
                                                        <p>New feature: list of tags</p>
                                                    </div>
                                                </a>
                                                <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                                    <div class="navbar-content">
                                                        <p>
                                                            <small class="has-text-info">03 Aug 2017</small>
                                                        </p>
                                                        <p>New feature: list of tags</p>
                                                    </div>
                                                </a>
                                                <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                                    <div class="navbar-content">
                                                        <p>
                                                            <small class="has-text-info">03 Aug 2017</small>
                                                        </p>
                                                        <p>New feature: list of tags</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="column">
                                                <h1 class="title is-6 is-mega-menu-title">Sub Menu Title</h1>
                                                <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                                    <div class="navbar-content">

                                                        <p>
                                                            <small class="has-text-info">03 Aug 2017</small>
                                                        </p>
                                                        <p>New feature: list of tags</p>
                                                    </div>
                                                </a>
                                                <a class="navbar-item " href="/documentation/overview/start/">
                                                    Overview
                                                </a>
                                                <a class="navbar-item "
                                                    href="http://bulma.io/documentation/modifiers/syntax/">
                                                    Modifiers
                                                </a>
                                                <a class="navbar-item "
                                                    href="http://bulma.io/documentation/columns/basics/">
                                                    Columns
                                                </a>
                                            </div>
                                            <div class="column">
                                                <h1 class="title is-6 is-mega-menu-title">Sub Menu Title</h1>
                                                <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                                    <div class="navbar-content">
                                                        <p>
                                                            <small class="has-text-info">03 Aug 2017</small>
                                                        </p>
                                                        <p>New feature: list of tags</p>
                                                    </div>
                                                </a>
                                                <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                                    <div class="navbar-content">
                                                        <p>
                                                            <small class="has-text-info">03 Aug 2017</small>
                                                        </p>
                                                        <p>New feature: list of tags</p>
                                                    </div>
                                                </a>
                                                <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                                    <div class="navbar-content">
                                                        <p>
                                                            <small class="has-text-info">03 Aug 2017</small>
                                                        </p>
                                                        <p>New feature: list of tags</p>
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="column">
                                                <h1 class="title is-6 is-mega-menu-title">Sub Menu Title</h1>
                                                <a class="navbar-item " href="/documentation/overview/start/">
                                                    Overview
                                                </a>
                                                <a class="navbar-item "
                                                    href="http://bulma.io/documentation/modifiers/syntax/">
                                                    Modifiers
                                                </a>
                                                <a class="navbar-item "
                                                    href="http://bulma.io/documentation/columns/basics/">
                                                    Columns
                                                </a>
                                                <a class="navbar-item "
                                                    href="http://bulma.io/documentation/layout/container/">
                                                    Layout
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="navbar-divider">
                                    <div class="navbar-item">
                                        <div class="navbar-content">
                                            <div class="level is-mobile">
                                                <div class="level-left">
                                                    <div class="level-item">
                                                        <strong>Stay up to date!</strong>
                                                    </div>
                                                </div>
                                                <div class="level-right">
                                                    <div class="level-item">
                                                        <a class="button bd-is-rss is-small"
                                                            href="http://bulma.io/atom.xml">
                                                            <span class="icon is-small">
                                                                <i class="fa fa-rss"></i>
                                                            </span>
                                                            <span>Subscribe</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="navbar-item">
                                Home
                            </a>
                            <a class="navbar-item">
                                Home
                            </a>
                        </div>


                    </div>
                </nav>
            </div>


        </div>

        <div class="main__body">

            <!-- Tiles -->

            <div class="album container text-is-center">
                <div class="tile is-ancestor">
                    <div class="tile is-vertical is-8">
                        <div class="tile">
                            <div class="tile is-parent is-vertical">
                                <article class="tile is-child">
                                    <!-- Put any content you want -->
                                    <figure class="image is-4by3">
                                        <img src="https://bulma.io/images/placeholders/640x480.png">
                                    </figure>
                                    <div class="d-flex flex-column-nowrap">
                                        <p class="is-size-3 has-text-weight-semibold">Middle</p>
                                        <p class="is-size-6">With an image</p>
                                    </div>
                                </article>
                                <article class="tile is-child">
                                    <!-- Put any content you want -->
                                    <figure class="image is-4by3">
                                        <img src="https://bulma.io/images/placeholders/640x480.png">
                                    </figure>
                                    <div class="d-flex flex-column-nowrap">
                                        <p class="is-size-3 has-text-weight-semibold">Middle</p>
                                        <p class="is-size-6">With an image</p>
                                    </div>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child">
                                    <!-- Put any content you want -->
                                    <figure class="image is-3by5">
                                        <img src="https://bulma.io/images/placeholders/480x800.png">
                                    </figure>
                                    <div class="d-flex flex-column-nowrap">
                                        <p class="is-size-3 has-text-weight-semibold">Middle</p>
                                        <p class="is-size-6">With an image</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child">
                                <!-- Put any content you want -->
                                <figure class="image is-16by9">
                                    <img src="https://bulma.io/images/placeholders/640x360.png">
                                </figure>
                                <div class="d-flex flex-column-nowrap">
                                    <p class="is-size-3 has-text-weight-semibold">Middle</p>
                                    <p class="is-size-6">With an image</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child">
                            <!-- Put any content you want -->
                            <figure class="image is-3by4">
                                <img src="https://bulma.io/images/placeholders/480x640.png">
                            </figure>
                            <div class="d-flex flex-column-nowrap">
                                <p class="is-size-3 has-text-weight-semibold">Middle</p>
                                <p class="is-size-6">With an image</p>
                            </div>
                        </article>
                        <article class="tile is-child">
                            <!-- Put any content you want -->
                            <figure class="image is-3by4">
                                <img src="https://bulma.io/images/placeholders/480x640.png">
                            </figure>
                            <div class="d-flex flex-column-nowrap">
                                <p class="is-size-3 has-text-weight-semibold">Middle</p>
                                <p class="is-size-6">With an image</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <!-- Tiles End-->

            <!-- Brand Carousel -->
            <div class="main__carousel mh-2">
                <div class="container">
                    <p class="title is-4 text-center">Наши Бренды</p>
                    <hr>
                    <brand-swiper></brand-swiper>
                </div>
            </div>

        </div>

        <div class="main__footer">
            <footer class="footer">
                <div class="container">
                    <div class="columns container">
                        <div class="column is-two-fifths">
                            <div>
                                <a href="#">
                                    <img src="img/babycheeks-logo.png" alt="footer-logo" width="40%">
                                </a>
                            </div>

                            <div class="d-flex flex-column-nowrap">
                                <p class="mh-2">Свяжитесь с нами по нашим социальным сетям</p>
                                <div class="social-media__icons">
                                    <a href="#"><img src="img/social_media/telegram.png" alt="tg"></a>
                                    <a href="#"><img src="img/social_media/insta.png" alt="inst"></a>
                                    <a href="#"><img src="img/social_media/facebook.png" alt="facebook"></a>
                                    <a href="#"><img src="img/social_media/youtube.png" alt="youtube"></a>
                                </div>
                            </div>

                            <div class="mh-1">
                                <ul class="d-flex flex-column-nowrap list-style-none">
                                    <li>Если есть вопросы звоните</li>
                                    <li>+998 (90) 180 15 02</li>
                                    <li>+998 (90) 180 15 02</li>
                                    <li>Почта: <a href="#">babycheeks.tashkent@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="column is-one-fifth">
                            <ul class="d-flex flex-column-nowrap list-style-none">
                                <li>Что то там</li>
                                <li><a href="#">О нас</a></li>
                                <li><a href="#">Категория</a></li>
                                <li><a href="#">Категория</a></li>
                                <li><a href="#">Категория</a></li>
                                <li><a href="#">Категория</a></li>
                            </ul>
                        </div>

                        <div class="column">
                            <div>
                                <p>Почему покупатели выбирают «BabyCheeks»</p>
                                <p class="is-size-6">Большой выбор одежды, обуви, игрушек и аксессуаров, доступные для
                                    заказа в любое
                                    время. Все товары имеются в наличии на наших складах и будут доставлены в любой
                                    город Узбекистана.</p>
                            </div>
                            <div>
                                <p>Всегда для вас:</p>
                                <ul class="is-size-6">
                                    <li>скидки до –50% каждый день;</li>
                                    <li>бесплатная доставка по Ташкенту при оплате от 50 000 сум;</li>
                                    <li>бесплатная примерка до 10 товаров в Ташкенте;</li>
                                    <li>самая быстрая доставка по всей стране (6–48 часов);</li>
                                    <li>более 2 000 брендов в каталоге;</li>
                                    <li>оплата наличными или через платежные системы:</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


</body>

</html>
