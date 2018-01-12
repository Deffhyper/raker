<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="lk-title lk-title--big text-lg-right">Мои заказы</h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-3">
            <div class="round-border-dotted">
                <span class="lk-mob-navigate-trigger">Меню</span>
                <div class="lk-mob-navigate-items">
                    <div class="lk-add-avatar border-bottom-dotted">
                        <div class="lk-user-block">

                            <div class="lk-user-block__img">

                                <a href="#" class="lk-user-block__img-link">
                                    <img src="img/jpeg_files/user-photo.jpg" alt="user photo" width="90" height="90">
                                </a>

                                <div class="social-label">
                                    <span class="iconmoon icon-facebook-logo"></span>
                                </div>

                            </div>

                            <p class="lk-user-block__name">Александр</p>
                            <a href="tel:+380932255587" class="lk-user-block__prop">+38 (093) 225-55-87</a>
                            <a href="mailto:email@gmail.com" class="lk-user-block__prop">email@gmail.com</a>

                        </div>

                        <div class="lk-user-block__rating">
                            <span class="rateit"
                                  data-rateit-mode="font"
                                  data-rateit-step="0.5"
                                  data-rateit-value="2"
                                  data-rateit-ispreset="true"
                                  data-rateit-readonly="true"
                                  data-rateit-icon=""
                                  style="font-family:fontawesome"
                            ></span>
                            <div class="lk-user-block__rating-sub-label">Только распробовал</div>
                            <div class="lk-user-block__rating-label">Съедено - 13 кг</div>
                        </div>
                    </div>
                    <ul class="lk-body">
                        <li class="lk-body__item">
                            <a href="#" class="lk-body__link">
                                <span class="iconmoon icon-user"></span>
                                <span class="lk-body__text">Личный кабинет</span>
                            </a>
                        </li>
                        <li class="lk-body__item">
                            <a href="#" class="lk-body__link">
                                <span class="iconmoon icon-settings"></span>
                                <span class="lk-body__text">Настроить профиль</span>
                            </a>
                        </li>
                        <li class="lk-body__item active">
                            <a href="#" class="lk-body__link">
                                <span class="iconmoon icon-list"></span>
                                <span class="lk-body__text">Заказы</span>
                            </a>
                            <ul class="lk-body__list">
                                <li><a href="#">Выполняются</a></li>
                                <li><a href="#">Доставлены</a></li>
                            </ul>

                        </li>
                        <li class="lk-body__item">
                            <a href="#" class="lk-body__link">
                                <span class="iconmoon icon-logout"></span>
                                <span class="lk-body__text">Выйти</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="col-lg-8 col-md-12">
            <div class="lk-container order-item-list">
                <div class="round-border-dotted ">
                    <div class="order-item">
                        <div class="order-item-header border-bottom-dotted">
                            <div class="order-item-header__wrapper">
                                <p class="order-item__title">Заказ №243236</p>
                                <p class="mb-0">25 декабря 2017, 16:56 — <span class="text-orange">Подтверждение</span>
                                </p>
                            </div>

                            <div class="order-item__preview">
                                <ul class="mb-3">
                                    <li>
                                        <p class="mb-1">Свежая треска — 4 кг</p>
                                    </li>
                                    <li>
                                        <p class="mb-1">Свежий лосось — 2 кг</p>
                                    </li>
                                </ul>

                                <p class="mb-1"><b>Итого: 2154 грн</b></p>
                            </div>
                        </div>
                        <div class="order-item__detail-info">

                            <div class="order-item__detail-info--item">
                                <div class="container-fluid">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 col-sm-12">
                                            <table class="order-item-table-delivery">
                                                <tbody>
                                                <tr>
                                                    <td>Дата доставки</td>
                                                    <td><b>25 января 2018</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Время доставки</td>
                                                    <td><b>19:43</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 pl-lg-5">
                                            <table class="order-item-table-delivery">
                                                <tbody>
                                                <tr>
                                                    <td><b>Адрес доставки:</b></td>
                                                </tr>
                                                <tr>
                                                    <td>г. Киев, ул. Шевченко 15, кв. 256</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item d-flex justify-content-end">
                                <table class="order-item-outlay">
                                    <tbody>
                                    <tr>
                                        <td>Общая стоимость:</td>
                                        <td>1336 грн</td>
                                    </tr>
                                    <tr>
                                        <td>Стоимость доставки:</td>
                                        <td>120 грн</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="order-item__detail-info--item">

                                <div class="d-flex justify-content-end mb-4">

                                    <table class="order-item-outlay order-item-outlay--big">
                                        <tbody>
                                        <tr>
                                            <td>Общая стоимость:</td>
                                            <td>1336 грн</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="gray-desk gray-desk--padding-md text-center">
                                    <p class="gray-desk__title">Подтверждение</p>
                                    <p class="gray-desk__subtitle">Осталось 13 минут</p>
                                    <div class="mb-2">
                                        <ul class="timeline list-inline">
                                            <li class="active"></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn__accent-second btn--padding-md">Позвонить оператору</a>
                                </div>

                            </div>


                        </div>

                    </div>
                    <div class="order-item">

                        <div class="order-item-header border-bottom-dotted">
                            <div class="order-item-header__wrapper">
                                <p class="order-item__title">Заказ №243236</p>
                                <p class="mb-0">25 декабря 2017, 16:56 — <span class="text-orange">Подтверждение</span>
                                </p>
                            </div>

                            <div class="order-item__preview">
                                <ul class="mb-3">
                                    <li>
                                        <p class="mb-1">Свежая треска — 4 кг</p>
                                    </li>
                                    <li>
                                        <p class="mb-1">Свежий лосось — 2 кг</p>
                                    </li>
                                </ul>

                                <p class="mb-1"><b>Итого: 2154 грн</b></p>
                            </div>
                        </div>
                        <div class="order-item__detail-info">

                            <div class="order-item__detail-info--item">
                                <div class="container-fluid">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 col-sm-12">
                                            <table class="order-item-table-delivery">
                                                <tbody>
                                                <tr>
                                                    <td>Дата доставки</td>
                                                    <td><b>25 января 2018</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Время доставки</td>
                                                    <td><b>19:43</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 pl-lg-5">
                                            <table class="order-item-table-delivery">
                                                <tbody>
                                                <tr>
                                                    <td><b>Адрес доставки:</b></td>
                                                </tr>
                                                <tr>
                                                    <td>г. Киев, ул. Шевченко 15, кв. 256</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item d-flex justify-content-end">
                                <table class="order-item-outlay">
                                    <tbody>
                                    <tr>
                                        <td>Общая стоимость:</td>
                                        <td>1336 грн</td>
                                    </tr>
                                    <tr>
                                        <td>Стоимость доставки:</td>
                                        <td>120 грн</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="d-flex justify-content-end mb-4">
                                    <table class="order-item-outlay order-item-outlay--big">
                                        <tbody>
                                        <tr>
                                            <td>Общая стоимость:</td>
                                            <td>1336 грн</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="gray-desk gray-desk--padding-md text-center">
                                    <p class="gray-desk__title">Подтверждение</p>
                                    <p class="gray-desk__subtitle">Осталось 20 минут</p>
                                    <div class="mb-2">
                                        <ul class="timeline list-inline">
                                            <li></li>
                                            <li class="active"></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn__accent-second btn--padding-md">Позвонить оператору</a>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="order-item">
                        <div class="order-item-header border-bottom-dotted">
                            <div class="order-item-header__wrapper">
                                <p class="order-item__title">Заказ №243236</p>
                                <p class="mb-0">25 декабря 2017, 16:56 — <span class="iconmoon icon-like"></span>
                                </p>
                            </div>

                            <div class="order-item__preview">
                                <ul class="mb-3">
                                    <li>
                                        <p class="mb-1">Свежая треска — 4 кг</p>
                                    </li>
                                    <li>
                                        <p class="mb-1">Свежий лосось — 2 кг</p>
                                    </li>
                                </ul>

                                <p class="mb-1"><b>Итого: 2154 грн</b></p>
                            </div>
                        </div>
                        <div class="order-item__detail-info">

                            <div class="order-item__detail-info--item">
                                <div class="container-fluid">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 col-sm-12">
                                            <table class="order-item-table-delivery">
                                                <tbody>
                                                <tr>
                                                    <td>Дата доставки</td>
                                                    <td><b>25 января 2018</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Время доставки</td>
                                                    <td><b>19:43</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 pl-lg-5">
                                            <table class="order-item-table-delivery">
                                                <tbody>
                                                <tr>
                                                    <td><b>Адрес доставки:</b></td>
                                                </tr>
                                                <tr>
                                                    <td>г. Киев, ул. Шевченко 15, кв. 256</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item d-flex justify-content-end">
                                <table class="order-item-outlay">
                                    <tbody>
                                    <tr>
                                        <td>Общая стоимость:</td>
                                        <td>1336 грн</td>
                                    </tr>
                                    <tr>
                                        <td>Стоимость доставки:</td>
                                        <td>120 грн</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="order-item__detail-info--item">

                                <div class="d-flex justify-content-end mb-4">

                                    <table class="order-item-outlay order-item-outlay--big">
                                        <tbody>
                                        <tr>
                                            <td>Общая стоимость:</td>
                                            <td>1336 грн</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="gray-desk gray-desk--padding-md text-center">

                                    <p class="gray-desk__title gray-desk__title--big mb-5">
                                        <span class="iconmoon icon-like icon-like--black icon-like--big"></span>
                                        Вам понравилось
                                    </p>
                                    <div class="mb-2"></div>
                                    <a href="#" class="btn btn__accent-second btn--padding-md">Повторить заказ</a>

                                </div>

                            </div>


                        </div>

                    </div>
                    <div class="order-item">

                        <div class="order-item-header border-bottom-dotted">
                            <div class="order-item-header__wrapper">
                                <p class="order-item__title">Заказ №243236</p>
                                <p class="mb-0">25 декабря 2017, 16:56 —  <span class="iconmoon icon-dislike"></span>
                                </p>
                            </div>

                            <div class="order-item__preview">
                                <ul class="mb-3">
                                    <li>
                                        <p class="mb-1">Свежая треска — 4 кг</p>
                                    </li>
                                    <li>
                                        <p class="mb-1">Свежий лосось — 2 кг</p>
                                    </li>
                                </ul>

                                <p class="mb-1"><b>Итого: 2154 грн</b></p>
                            </div>
                        </div>
                        <div class="order-item__detail-info">

                            <div class="order-item__detail-info--item">
                                <div class="container-fluid">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 col-sm-12">
                                            <table class="order-item-table-delivery">
                                                <tbody>
                                                <tr>
                                                    <td>Дата доставки</td>
                                                    <td><b>25 января 2018</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Время доставки</td>
                                                    <td><b>19:43</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 pl-lg-5">
                                            <table class="order-item-table-delivery">
                                                <tbody>
                                                <tr>
                                                    <td><b>Адрес доставки:</b></td>
                                                </tr>
                                                <tr>
                                                    <td>г. Киев, ул. Шевченко 15, кв. 256</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item d-flex justify-content-end">
                                <table class="order-item-outlay">
                                    <tbody>
                                    <tr>
                                        <td>Общая стоимость:</td>
                                        <td>1336 грн</td>
                                    </tr>
                                    <tr>
                                        <td>Стоимость доставки:</td>
                                        <td>120 грн</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="d-flex justify-content-end mb-4">
                                    <table class="order-item-outlay order-item-outlay--big">
                                        <tbody>
                                        <tr>
                                            <td>Общая стоимость:</td>
                                            <td>1336 грн</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="gray-desk gray-desk--padding-md">
                                    <p class="gray-desk__title gray-desk__title--big mb-3 text-center">Вам понравилось?</p>
                                    <ul class="mb-3">
                                        <li>Для нас очень важно ваше мнение.</li>
                                        <li>Пожалуйста, оставьте ваш отзыв:</li>
                                    </ul>
                                    <form action="" class="gray-desk__form">
                                        <input type="text" class="custom-input mb-3">
                                        <fieldset class="text-center">
                                            <input type="submit" value="Да" class="btn btn__accent-second btn--padding-md">
                                            <input type="reset" value="Нет" class="btn btn__gray btn--padding-md">
                                        </fieldset>

                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="order-item">
                        <div class="order-item-header border-bottom-dotted">
                            <div class="order-item-header__wrapper">
                                <p class="order-item__title">Заказ №243236</p>
                                <p class="mb-0">25 декабря 2017, 16:56 —  Доставлено
                                </p>
                            </div>

                            <div class="order-item__preview">
                                <ul class="mb-3">
                                    <li>
                                        <p class="mb-1">Свежая треска — 4 кг</p>
                                    </li>
                                    <li>
                                        <p class="mb-1">Свежий лосось — 2 кг</p>
                                    </li>
                                </ul>

                                <p class="mb-1"><b>Итого: 2154 грн</b></p>
                            </div>
                        </div>
                        <div class="order-item__detail-info">

                            <div class="order-item__detail-info--item">
                                <div class="container-fluid">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 col-sm-12">
                                            <table class="order-item-table-delivery">
                                                <tbody>
                                                <tr>
                                                    <td>Дата доставки</td>
                                                    <td><b>25 января 2018</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Время доставки</td>
                                                    <td><b>19:43</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 pl-lg-5">
                                            <table class="order-item-table-delivery">
                                                <tbody>
                                                <tr>
                                                    <td><b>Адрес доставки:</b></td>
                                                </tr>
                                                <tr>
                                                    <td>г. Киев, ул. Шевченко 15, кв. 256</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                            <li>Размер поставки — XL</li>
                                            <li>Количество — 15 кг</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="order-item-prop">

                                    <div class="order-item-prop__img">
                                        <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                                    </div>

                                    <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                                    <div class="order-item-prop__list">
                                        <ul>
                                            <li>Размер поставки — XL</li>
                                        </ul>

                                        <span class="order-item-prop__list--total">1257 грн</span>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item__detail-info--item d-flex justify-content-end">
                                <table class="order-item-outlay">
                                    <tbody>
                                    <tr>
                                        <td>Общая стоимость:</td>
                                        <td>1336 грн</td>
                                    </tr>
                                    <tr>
                                        <td>Стоимость доставки:</td>
                                        <td>120 грн</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="order-item__detail-info--item">
                                <div class="d-flex justify-content-end mb-4">
                                    <table class="order-item-outlay order-item-outlay--big">
                                        <tbody>
                                        <tr>
                                            <td>Общая стоимость:</td>
                                            <td>1336 грн</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="gray-desk gray-desk--padding-md">
                                    <p class="gray-desk__title gray-desk__title--big mb-3 text-center">Вам понравилось?</p>
                                    <ul class="mb-4 color-gray">
                                        <li>Чтобы оставить отзыв, необходимо связать ваш профиль</li>
                                        <li class="mb-3">в Seadora с Facebook</li>
                                        <li>Для нас очень важно ваше мнение!</li>
                                    </ul>
                                    <div class="text-center">
                                        <a href="#" class="btn btn__blue btn--padding-md">Привязать к facebook</a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 pb-5"></div>
    </div>
</div>
<?php include_once "parts/footer.php" ?>

<script src="js/libs.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>