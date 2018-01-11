<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="lk-title lk-title--big text-lg-right">Личный кабинет</h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 mb-3">
            <div class="round-border-dotted">
                <span class="lk-mob-navigate-trigger">Меню</span>
                <div class="lk-mob-navigate-items">
                    <div class="lk-header">
                        <div class="lk-user-block lk-user-block--big">
                            <div class="lk-user-block__img">
                                <a href="#" class="lk-user-block__img-link">
                                    <img src="img/jpeg_files/user-photo.jpg" alt="user photo" width="90" height="90">
                                </a>
                                <div class="social-label">
                                    <span class="iconmoon icon-facebook-logo"></span>
                                </div>
                            </div>
                            <p class="lk-user-block__name">Александр</p>
                            <p class="lk-user-block__prop">13 июнь 1987</p>
                            <a href="tel:+380932255587" class="lk-user-block__prop">+38 (093) 225-55-87</a>
                            <a href="mailto:email@gmail.com" class="lk-user-block__prop">email@gmail.com</a>
                            <div class="mt-3">
                                <a href="#" class="link-underline link-underline--sm link-underline--gray">Редактировать</a>
                            </div>
                        </div>

                        <div class="text-center mb-0 mt-4">
                            <a href="#" class="btn btn__blue btn--padding-lg btn--wide">Привязать к facebook</a>
                        </div>
                    </div>
                    <div class="lk-header">
                        <div class="lk-user-block__rating lk-user-block__rating--big">
                            <span class="rateit"
                                  data-rateit-mode="font"
                                  data-rateit-value="2.5"
                                  data-rateit-ispreset="true"
                                  data-rateit-readonly="true"
                            ></span>
                            <div class="lk-user-block__rating-sub-label">Только распробовал</div>
                            <div class="lk-user-block__rating-label">Съедено - 13 кг</div>
                        </div>
                    </div>
                    <div class="border-bottom-dotted text-center">
                        <div class="lk-description">
                            <table class="lk-description__list">
                                <tbody>
                                <tr>
                                    <td><b class="text-lg">10кг</b></td>
                                    <td><b>—</b></td>
                                    <td><b class="text-lg">Бейсболка</b></td>
                                <tr>
                                <tr>
                                    <td><b class="text-lg">20кг</b></td>
                                    <td><b>—</b></td>
                                    <td><b class="text-lg">Свитер</b></td>
                                </tr>
                                </tbody>
                            </table>
                            <span class="lk-description__inform text-left">Заберите свой приз!
                                <br> Детали:<a href="tel:0965550005">(096) 555-000-5</a>
                            </span>
                        </div>
                        <div class="text-center">
                            <a href="#" class="gray-dashed-link">Вас ждут и другие призы!</a>
                        </div>
                    </div>

                    <div class="border-bottom-dotted text-center">
                        <a href="#" class="link-underline">Изменить пароль</a>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-lg-6 col-md-12 mb-5">
            <div class="lk-container">
                <div class="round-border-dotted">
                    <div class="border-bottom-dotted text-center">
                        <p class="title-h2 mb-3"><b>-5% на следующий заказ</b></p>
                        <p class="color-gray mb-1">Будет применена при следующем заказе</p>
                        <p class="color-gray mb-1">Срок действия - до 22.01.2018</p>
                    </div>
                </div>
            </div>

            <div class="lk-container">
                <div class="round-border-dotted">
                    <div class="border-bottom-dotted border-bottom-dotted--lg">
                        <div class="order-item-header">
                            <div class="order-item-header__wrapper">
                                <p class="order-item__title">Заказ №243236</p>
                                <p class="mb-0">25 декабря 2017, 16:56 — Доставлено
                                </p>
                            </div>

                            <div class="order-item__preview mb-3">
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

                            <div class="text-center">
                                <a href="#" class="link-underline link-underline--sm link-underline--gray">Детали заказа</a>
                            </div>

                        </div>
                    </div>
                    <div class="border-bottom-dotted text-center">
                        <a href="#" class="link-underline">Все заказы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "parts/footer.php" ?>

<script src="js/libs.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>