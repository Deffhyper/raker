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
                    <div class="lk-header">
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
                        <li class="lk-body__item active">
                            <a href="#" class="lk-body__link">
                                <span class="iconmoon icon-settings"></span>
                                <span class="lk-body__text">Настроить профиль</span>
                            </a>
                        </li>
                        <li class="lk-body__item">
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

        <div class="col-lg-8 col-md-12 mb-5">
            <div class="lk-container">
                <div class="round-border-dotted ">
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

                            <div class="text-center mb-2">
                                <a href="#" class="btn btn__blue btn--padding-lg">Привязать к facebook</a>
                            </div>

                            <div class="text-center">
                                <a href="#" class="link-underline">Или добавить фото</a>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom-dotted">
                        <h2 class="title-h2 text-center">Контактная информация</h2>
                        <form action="#" class="lk-user-form">
                            <div class="lk-user-form__wrapper">
                                <fieldset class="input-block">
                                    <label for="i-1" class="custom-input-label custom-input-label--under">Ваше имя:</label>
                                    <input type="text" id="i-1" class="custom-input custom-input--lg">
                                </fieldset>
                                <fieldset class="input-block">
                                    <label for="i-2" class="custom-input-label custom-input-label--under">Телефон:</label>
                                    <input type="tel" id="i-2" class="custom-input custom-input--lg tel-input" placeholder="+38(0__)___-__-__">
                                </fieldset>
                                <fieldset class="input-block">
                                    <label for="i-3" class="custom-input-label custom-input-label--under">Электронная почта:</label>
                                    <input type="email" id="i-3" class="custom-input custom-input--lg" placeholder="example@gmail.com">
                                </fieldset>
                                <fieldset class="input-block">
                                    <label for="i-4" class="custom-input-label custom-input-label--under">Электронная почта:</label>
                                    <input type="email" id="i-4" class="custom-input custom-input--lg" placeholder="example@gmail.com">
                                </fieldset>
                                <fieldset class="input-block">
                                    <label for="i-5" class="custom-input-label custom-input-label--under">Дата рождения:</label>
                                    <div class="input-date">
                                        <input type="text" id="i-5" class="custom-input custom-date custom-input--lg" placeholder="дд/мм/гггг">
                                    </div>
                                </fieldset>
                            </div>

                            <fieldset class="lk-user-form__bottom">
                                <input type="submit" value="Сохранить" class="btn btn__accent-second btn--md">
                            </fieldset>
                        </form>
                    </div>

                    <div class="border-bottom-dotted">
                        <h2 class="title-h2 text-center">Я хочу поменять пароль</h2>
                        <form action="#" class="lk-user-form">
                            <div class="lk-user-form__wrapper">
                                <fieldset class="input-block">
                                    <label for="i-6" class="custom-input-label custom-input-label--under">Старый пароль:</label>
                                    <input type="password" id="i-6" class="custom-input custom-input--lg">
                                </fieldset>

                                <div class="row sm-gutters">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset class="input-block">
                                            <label for="i-7" class="custom-input-label custom-input-label--under">Новый пароль:</label>
                                            <input type="password" id="i-7" class="custom-input custom-input--lg" >
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset class="input-block">
                                            <label for="i-8" class="custom-input-label custom-input-label--under">Еще раз новый пароль:</label>
                                            <input type="password" id="i-8" class="custom-input custom-input--lg">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="lk-user-form__bottom">
                                <input type="submit" value="Сохранить" class="btn btn__accent-second btn--md">
                                <a href="#" class="link-underline-dashed link-forget-password">Я забыл текущий пароль</a>
                            </fieldset>

                        </form>
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