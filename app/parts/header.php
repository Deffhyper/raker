<?php //echo file_get_contents("img/svg_sprite/svg/symbols.svg")?>

<header class="page-header">
    <div class="page-header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a href="#" id="trigger-menu" class="burger-button" role="button">
                        <span></span><span></span><span></span>
                    </a>
                    <div class="main-logo">
                        <a href="#">
                            <img src="img/jpeg_files/logo-layer.png" alt="logo png back" class="main-logo-back">
                            <object data="img/svg/Seadora_logo.svg" type="image/svg+xml" class="main-logo-img"></object>
                        </a>
                    </div>
                    <ul class="page-header-right">
                        <li class="page-header-right__item">
                            <div class="page-header-authorize">
                                <a href="#" class="page-header-authorize__in">Вход</a>
                                <a href="#" class="page-header-authorize__reg">Регистрация</a>
                            </div>
                        </li>
                        <li class="page-header-right__item">
                            <div class="for-small-devices">
                                <a href="tel:+380965550005" class="page-header-mobile-tel"><i class="iconmoon icon-phone"></i></a>
                            </div>
                            <div class="page-header-info">
                                <p class="page-header-info__time">Звоните с 8:00 до 23:00</p>
                                <p class="page-header-info__tel"><a href="tel:+380965550005">+38 (096) 555-000-5</a></p>
                            </div>
                        </li>
                        <li class="page-header-right__item">
                            <div class="page-header-lang">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" id="lang"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RU</a>

                                    <ul class="dropdown-menu" aria-labelledby="lang">
                                        <li class="dropdown-item"><a href="#"><b>UK</b>Українська</a></li>
                                        <li class="dropdown-item active"><a href="#"><b>RU</b>Русский</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="page-header-right__item">
                            <div class="page-header-cart">
                                <a href="#">
                                    <i class="iconmoon icon-cart"></i>
                                    <span class="page-header-cart__label">2</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header-bottom">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <ul class="page-header-bottom-nav list-inline">
                        <li class="page-header-bottom-nav__item">
                            <a href="#">
                                <span class="iconmoon icon-fish"></span>
                                <span>Fresh Catch</span>
                            </a>
                        </li>
                        <li class="page-header-bottom-nav__item">
                            <a href="#">
                                <span class="iconmoon icon-house"></span>
                                <span>Магазин</span>
                            </a>
                        </li>
                        <li class="page-header-bottom-nav__item">
                            <a href="#">
                                <span class="iconmoon icon-fishing-rod"></span>
                                <span>Поставщики</span>
                            </a>
                        </li>
                    </ul>
                    <div class="page-header-bottom-fresh float-right">
                        <div class="left"><i class="iconmoon icon-anchor"></i></div>
                        <div class="right">
                            <span class="page-header-bottom-fresh__title">Свежий улов</span>
                            <p class="page-header-bottom-fresh__prop">
                                <span class="country">Финляндия – 02.03.2017</span>
                                <img src="img/jpeg_files/f-1.png" alt="flag">
                            </p>
                        </div>
                        <ul class="page-header-bottom-fresh__dropdown">
                            <li>
                                <a href="#">
                                    <span class="page-header-bottom-fresh__dropdown--image">
                                        <object data="img/svg/crab.svg" type="image/svg+xml"></object>
                                    </span>
                                    <span class="page-header-bottom-fresh__dropdown--property">
                                        <span>Раки, крабы и креветки севера (регион Тампере, Финляндия)</span>
                                        <span class="color-accent">Доставка: 14.03 – 16.03</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="page-header-bottom-fresh__dropdown--image">
                                        <object data="img/svg/fish.svg" type="image/svg+xml"></object>
                                    </span>
                                    <span class="page-header-bottom-fresh__dropdown--property">
                                        <span>Раки, крабы и креветки севера (регион Тампере, Финляндия)</span>
                                        <span>Доставка: 14.03 – 16.03</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="page-header-bottom-fresh__dropdown--image">
                                        <object data="img/svg/shrimp.svg" type="image/svg+xml"></object>
                                    </span>
                                    <span class="page-header-bottom-fresh__dropdown--property">
                                        <span>Раки, крабы и креветки севера (регион Тампере, Финляндия)</span>
                                        <span>Доставка: 14.03 – 16.03</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="page-header-bottom-fresh__dropdown--all">Весь свежий улов</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--    ///////////////////////////////////////////// mobile menu ///////////////////////////////////-->
    <div class="mob-menu">
        <div class="mob-menu__header d-flex justify-content-between">
            <a href="#" class="mob-menu-close"></a>
            <span class="page-header-mob-menu-title">Raker.ua</span>
        </div>
        <div class="page-header-authorize">
            <a href="#" class="page-header-authorize__in">Вход</a>
            <a href="#" class="page-header-authorize__reg">Регистрация</a>
        </div>
        <ul class="page-header-bottom-nav ">
            <li class="page-header-bottom-nav__item">
                <a href="#">
                    <span class="iconmoon icon-fish"></span>
                    <span>Fresh Catch</span>
                </a>
            </li>
            <li class="page-header-bottom-nav__item">
                <a href="#">
                    <span class="iconmoon icon-house"></span>
                    <span>Магазин</span>
                </a>
            </li>
            <li class="page-header-bottom-nav__item">
                <a href="#">
                    <span class="iconmoon icon-fishing-rod"></span>
                    <span>Поставщики</span>
                </a>
            </li>
        </ul>
        <ul class="mob-menu__contacts">
            <li class="mob-menu__contacts--item d-flex justify-content-between">
                <span>Контакты</span>
                <a href="tel:+380965550005" class="mob-tel">+38 (096) 555-000-5</a>
            </li>
            <li class="page-header-mob-menu__contacts--item d-flex justify-content-between">
                <span>Язык сайта</span>
                <div class="page-header-lang">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" role="button" id="lang"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RU</a>
                        <ul class="dropdown-menu" aria-labelledby="lang">
                            <li class="dropdown-item"><a href="#"><b>UK</b>Українська</a></li>
                            <li class="dropdown-item active"><a href="#"><b>RU</b>Русский</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>

</header>
