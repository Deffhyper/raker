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
                <div class="lk-header">
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
                                  data-rateit-value="2.5"
                                  data-rateit-ispreset="true"
                                  data-rateit-readonly="true"
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

        <div class="col-lg-8 col-md-12 mb-5">
            <div class="lk-container">
                <div class="round-border-dotted ">
                    <div class="border-bottom-dotted">
                        <div class="order-item-header">
                            <p class="order-item__title">Заказ №243236</p>
                            <p class="mb-3">25 декабря 2017, 16:56  —  <span class="text-orange">Подтверждение</span></p>

                            <p class="mb-1">Свежая треска  —  4 кг</p>
                            <p class="mb-3">Свежий лосось —  2 кг</p>

                            <p class="mb-1"><b>Итого: 2154 грн</b></p>
                        </div>
                    </div>

                    <div class="border-bottom-dotted">
                        <div class="order-item-header">
                            <p class="order-item__title">Заказ №243237</p>
                            <p class="mb-3">25 декабря 2017, 16:56  —  Доставлено</p>

                            <p class="mb-1">Свежая треска  —  4 кг</p>
                            <p class="mb-3">Свежий лосось —  2 кг</p>

                            <p class="mb-1"><b>Итого: 2154 грн</b></p>
                        </div>
                    </div>

                    <div class="border-bottom-dotted">
                        <div class="order-item-header">
                            <p class="order-item__title">Заказ №243238</p>
                            <p class="mb-3">25 декабря 2017, 16:56  —  Доставлено <span class="iconmoon icon-like"></span></p>

                            <p class="mb-1">Свежая треска  —  4 кг</p>
                            <p class="mb-3">Свежий лосось —  3 кг</p>

                            <p class="mb-1"><b>Итого: 2154 грн</b></p>
                        </div>
                    </div>


                    <div class="border-bottom-dotted">
                        <div class="order-item-header">
                            <p class="order-item__title">Заказ №243239</p>
                            <p class="mb-3">25 декабря 2017, 16:56  —  Доставлено <span class="iconmoon icon-dislike"></span></p>

                            <p class="mb-1">Свежая форель  —  1 кг</p>
                            <p class="mb-3">Свежий лосось —  1 кг</p>

                            <p class="mb-1"><b>Итого: 2154 грн</b></p>
                        </div>
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