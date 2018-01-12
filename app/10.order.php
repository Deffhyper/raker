<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="lk-title lk-title--big text-lg-right">Оформление заказа</h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-12">
            <div class="lk-container">
                <ul class="lk-steps">
                    <li class="lk-steps-item lk-step-one active">
                        <b class="lk-label lk-title--normal">1</b>
                        <p class="lk-title lk-title--normal">Ваши данные <a href="#" class="gray-dashed-link">Изменить</a></p>
                        <div class="lk-output"  style="display: none"></div>
                        <div class="lk-steps-item__form lk-steps-content">
                            <form action="#">
                                <div class="row form-input-horizontal">
                                    <div class="col-lg-5 d-flex align-items-center">
                                        <label for="" class="custom-input-label">Фамилия:</label>
                                    </div>
                                    <div class="col-lg-7 d-flex align-items-center">
                                        <input type="text" class="custom-input" value="Петров">
                                    </div>
                                </div>

                                <div class="row form-input-horizontal">
                                    <div class="col-lg-5 d-flex align-items-center">
                                        <label for="" class="custom-input-label">Имя:</label>
                                    </div>
                                    <div class="col-lg-7 d-flex align-items-center">
                                        <input type="text" class="custom-input" value="Евгений">
                                    </div>
                                </div>

                                <div class="row form-input-horizontal">
                                    <div class="col-lg-5 d-flex align-items-center">
                                        <label for="" class="custom-input-label">Отчество:</label>
                                    </div>
                                    <div class="col-lg-7 d-flex align-items-center">
                                        <input type="text" class="custom-input" value="Сергеевич">
                                    </div>
                                </div>

                                <div class="row form-input-horizontal">
                                    <div class="col-lg-5 d-flex align-items-center">
                                        <label for="" class="custom-input-label">Телефон:</label>
                                    </div>
                                    <div class="col-lg-7 d-flex align-items-center">
                                        <input type="tel" class="custom-input" value="+38 (000) 000-00-00">
                                    </div>
                                </div>

                                <div class="row form-input-horizontal">
                                    <div class="col-lg-5 d-flex align-items-center">
                                        <label for="" class="custom-input-label mb-3">Город получателя:</label>
                                    </div>
                                    <div class="col-lg-7 d-flex flex-column">
                                        <input type="text" class="custom-input" value="Киев">
                                        <ul class="list-inline form-location-tip">
                                            <li class="decor"><img src="img/jpeg_files/arrow.png" alt="arrow"></li>
                                            <li><a href="#">Киев</a></li>
                                            <li><a href="#">Днепр</a></li>
                                            <li><a href="#">Одесса</a></li>
                                            <li><a href="#">Харьков</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row form-input-horizontal mt-4">
                                    <div class="col-12 text-center">
                                        <button class="btn btn__accent-second btn--md">Далее</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="lk-steps-item lk-step-two">
                        <b class="lk-label lk-title--normal">2</b>
                        <p class="lk-title lk-title--normal">Способ доставки  <a href="#" class="gray-dashed-link">Изменить</a></p>
                        <div class="lk-output" style="display: none"></div>
                        <div class="lk-tab lk-steps-content" style="display: none">
                            <ul class="lk-tab__header list-inline">
                                <li class="active">
                                    <a href="#" role="button"> <span>Самовывоз</span></a>
                                </li>
                                <li>
                                    <a href="#" role="button"><span>Курьерская доставка</span></a>
                                </li>
                            </ul>
                            <div class="lk-tab__body">
                                <div class="lk-steps-item__form active">
                                    <form action="">
                                        <div class="row form-input-horizontal">
                                            <div class="col-lg-7 d-flex align-items-center">
                                                <div class="custom-radio">
                                                    <input type="radio" name="ve-1" id="re-1" class="custom-radio__input"
                                                           checked>
                                                    <label for="re-1" class="custom-radio__label">Самовывоз из “SeaDora”
                                                        ул. Григория Сковороды, 1</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 d-flex align-items-center">
                                                <a href="#">
                                                    <span class="goods-hrz-prop-locate">
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             viewBox="0 0 50 50" x="0px" y="0px"
                                                             style="width: 100%; height: auto;"
                                                             preserveAspectRatio="none">
                                    <g>
                                        <path style="stroke:#000000;stroke-width:2;stroke-miterlimit:10;" d="M25.676,11.181c-3.596,0-6.522,2.927-6.522,6.522
                                            s2.927,6.522,6.522,6.522c3.595,0,6.522-2.927,6.522-6.522S29.271,11.181,25.676,11.181z M25.676,22.363
                                            c-2.569,0-4.659-2.09-4.659-4.659c0-2.568,2.09-4.658,4.659-4.658c2.569,0,4.659,2.09,4.659,4.658
                                            C30.335,20.273,28.245,22.363,25.676,22.363z"></path>
                                        <path style="stroke:#000000;stroke-width:2;stroke-miterlimit:10;" d="M36.672,6.257c-3.114-3.115-7.257-4.831-11.662-4.831
                                            c-4.406,0-8.547,1.715-11.662,4.831c-5.765,5.764-6.482,16.609-1.552,23.18L25.01,48.52l13.193-19.056
                                            C43.154,22.867,42.437,12.022,36.672,6.257z M36.809,28.459L25.01,45.497L13.192,28.432c-4.471-5.962-3.83-15.756,1.373-20.959
                                            c2.79-2.79,6.499-4.327,10.445-4.327s7.655,1.537,10.446,4.327C40.659,12.676,41.3,22.47,36.809,28.459z"></path>
                                    </g>
                                </svg>
                                                    </span>
                                                    <span class="gray-dashed-link">Link to map</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row form-input-horizontal">
                                            <div class="col-12">
                                                <div class="custom-radio">
                                                    <input type="radio" name="ve-1" id="re-2" class="custom-radio__input">
                                                    <label for="re-2" class="custom-radio__label">Отделение и почтоматы
                                                        “Нова Пошта”</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-input-horizontal">
                                            <div class="col-12">
                                                <div class="custom-radio">
                                                    <input type="radio" name="ve-1" id="re-3" class="custom-radio__input">
                                                    <label for="re-3" class="custom-radio__label">Почтомат
                                                        “Приватбанк”</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-input-horizontal">
                                            <div class="col-12">
                                                <div class="custom-radio">
                                                    <input type="radio" name="ve-1" id="re-4" class="custom-radio__input">
                                                    <label for="re-4" class="custom-radio__label">“Укрпошта
                                                        Експрес”</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-input-horizontal mt-4">
                                            <div class="col-12 text-center">
                                                <button class="btn btn__accent-second btn--md">Далее</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="lk-steps-item__form">
                                    <form action="">
                                        <div class="row form-input-horizontal">
                                            <div class="col-lg-5 d-flex align-items-center">
                                                <label for="" class="custom-input-label">Почта:</label>
                                            </div>
                                            <div class="col-lg-7 d-flex align-items-center">
                                                <input type="text" class="custom-input" placeholder="Выбрать почту">
                                            </div>
                                        </div>

                                        <div class="row form-input-horizontal">
                                            <div class="col-lg-5 d-flex align-items-center">
                                                <label for="" class="custom-input-label">Отделение:</label>
                                            </div>
                                            <div class="col-lg-7 d-flex align-items-center">
                                                <input type="text" class="custom-input" placeholder="Выбрать отделение">
                                            </div>
                                        </div>
                                        <div class="row form-input-horizontal">
                                            <div class="col-12">
                                                <div class="custom-radio">
                                                    <input type="radio" name="va-1" id="ra-2" class="custom-radio__input">
                                                    <label for="ra-2" class="custom-radio__label">Отделение и почтоматы
                                                        “Нова Пошта”</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-input-horizontal">
                                            <div class="col-12">
                                                <div class="custom-radio">
                                                    <input type="radio" name="va-1" id="ra-3" class="custom-radio__input" checked>
                                                    <label for="ra-3" class="custom-radio__label">Почтомат
                                                        “Приватбанк”</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-input-horizontal">
                                            <div class="col-12">
                                                <div class="custom-radio">
                                                    <input type="radio" name="va-1" id="ra-4" class="custom-radio__input">
                                                    <label for="ra-4" class="custom-radio__label">“Укрпошта
                                                        Експрес”</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-input-horizontal mt-4">
                                            <div class="col-12 text-center">
                                                <button class="btn btn__accent-second btn--md">Далее</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lk-steps-item lk-step-three">
                        <b class="lk-label lk-title--normal">3</b>
                        <p class="lk-title lk-title--normal">Способ оплаты</p>

                        <div class="lk-steps-item__form lk-steps-content" style="display: none;">
                            <form action="">


                                <div class="row form-input-horizontal">
                                    <div class="col-12">
                                        <div class="custom-radio">
                                            <input type="radio" name="vq-1" id="rq-2" class="custom-radio__input">
                                            <label for="rq-2" class="custom-radio__label">Наличными при получении</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-input-horizontal">
                                    <div class="col-12">
                                        <div class="custom-radio">
                                            <input type="radio" name="vq-1" id="rq-3" class="custom-radio__input" checked>
                                            <label for="rq-3" class="custom-radio__label">Картой Visa/Mastercard</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-input-horizontal">
                                    <div class="col-12">
                                        <div class="custom-radio">
                                            <input type="radio" name="vq-1" id="rq-4" class="custom-radio__input">
                                            <label for="rq-4" class="custom-radio__label">Masterpass</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-input-horizontal mt-4">
                                    <div class="col-12 text-center">
                                        <button class="btn btn__accent-second btn--md">Заказать</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </li>
                </ul>


            </div>
        </div>
        <div class="col-lg-5 col-md-12">
            <div class="round-border-dotted order-item mb-4">
                <div class="border-bottom-dotted">
                    <div class="order-item-header">
                        <p class="order-item__title">Заказ №1</p>
                        <a href="#" class="close-btn"></a>
                    </div>
                </div>
                <div class="border-bottom-dotted">
                    <div class="order-item-prop">

                        <div class="order-item-prop__img">
                            <img src="img/jpeg_files/order-img.jpg" alt="order" width="80" height="80">
                        </div>

                        <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                        <ul class="order-item-prop__list">
                            <li>Размер поставки — XL</li>
                            <li>Количество — 15 кг</li>
                        </ul>
                    </div>
                </div>
                <div class="border-bottom-dotted border-bottom-dotted--sm">
                    <div class="order-item-date">
                            <span class="order-item-date__icon">
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                      xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 55 55" x="0px" y="0px"
                                      style="width: 100%; height: auto;" preserveAspectRatio="none">
                                <g>
                                    <path stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M48.469,3.402h-8.956V0.851C39.513,0.38,39.134,0,38.663,0
                                        h-2.949c-0.47,0-0.851,0.38-0.851,0.851v2.551H16.156V0.851C16.156,0.38,15.776,0,15.306,0h-2.951c-0.47,0-0.85,0.38-0.85,0.851
                                        v2.551H2.551c-0.47,0-0.85,0.38-0.85,0.851v9.354v36.563c0,0.471,0.38,0.851,0.85,0.851h45.918c0.471,0,0.85-0.38,0.85-0.851
                                        V13.606V4.252C49.318,3.782,48.939,3.402,48.469,3.402z M3.401,5.102h8.103v2.552c0,0.47,0.38,0.85,0.85,0.85h2.951
                                        c0.47,0,0.851-0.38,0.851-0.85V5.102h18.707v2.552c0,0.47,0.381,0.85,0.851,0.85h2.949c0.471,0,0.85-0.38,0.85-0.85V5.102h8.106
                                        v10.655H3.401V5.102z M3.401,49.32V17.457h44.217V49.32H3.401z"></path>
                                </g>
                                <g>
                                    <rect x="11.114" y="25.198" width="3.813" height="3.813"></rect>
                                    <path d="M13.926,26.198v1.813h-1.813v-1.813H13.926 M15.926,24.198h-5.813v5.813h5.813V24.198L15.926,24.198z"></path>
                                </g>
                                <g>
                                    <rect x="22.739" y="25.198" width="3.812" height="3.813"></rect>
                                    <path d="M25.551,26.198v1.813h-1.812v-1.813H25.551 M27.551,24.198h-5.812v5.813h5.812V24.198L27.551,24.198z"></path>
                                </g>
                                <g>
                                    <rect x="34.385" y="25.198" width="3.813" height="3.813"></rect>
                                    <path d="M37.197,26.198v1.813h-1.813v-1.813H37.197 M39.197,24.198h-5.813v5.813h5.813V24.198L39.197,24.198z"></path>
                                </g>
                                <g>
                                    <rect x="11.114" y="36.198" width="3.813" height="3.813"></rect>
                                    <path d="M13.926,37.198v1.813h-1.813v-1.813H13.926 M15.926,35.198h-5.813v5.813h5.813V35.198L15.926,35.198z"></path>
                                </g>
                                <g>
                                    <rect x="22.739" y="36.198" width="3.812" height="3.813"></rect>
                                    <path d="M25.551,37.198v1.813h-1.813v-1.813H25.551 M27.551,35.198h-5.812v5.813h5.812V35.198L27.551,35.198z"></path>
                                </g>
                                <g>
                                    <rect x="34.385" y="36.198" width="3.813" height="3.813"></rect>
                                    <path d="M37.197,37.198v1.813h-1.813v-1.813H37.197 M39.197,35.198h-5.813v5.813h5.813V35.198L39.197,35.198z"></path>
                                </g>
                            </svg>
                            </span>
                        <span class="order-item-date__text">Дата доставки: 2.03 – 4.03</span>
                    </div>
                </div>
                <div class="border-bottom-dotted">
                    <table class="order-item-table">
                        <tbody>
                        <tr>
                            <td>Стоимость товаров в заказе:</td>
                            <td><b>1 356 грн</b></td>
                        </tr>
                        <tr>
                            <td>Скидка по промокоду:</td>
                            <td><b>0 грн</b></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="order-item-promo">
                        <form action="">
                            <input type="text"
                                   class="order-item-promo__input custom-input"
                                   placeholder="Введите промокод">
                        </form>
                    </div>
                </div>
                <div class="border-bottom-dotted">
                    <div class="order-item-total">
                        <span class="order-item-total__label">Сумма</span>
                        <span class="order-item-total__prop">1 356 грн</span>
                    </div>
                </div>
            </div>
            <div class="round-border-dotted order-item mb-4">
                <div class="border-bottom-dotted">
                    <div class="order-item-header">
                        <p class="order-item__title">Заказ №1</p>
                        <a href="#" class="close-btn"></a>
                    </div>
                </div>
                <div class="border-bottom-dotted">
                    <div class="order-item-prop">

                        <div class="order-item-prop__img">
                            <img src="img/jpeg_files/goods-1.jpg" alt="goods" height="193" width="288">
                        </div>

                        <div class="order-item-prop__title">Свежий фреш-кетч из Финляндии</div>

                        <ul class="order-item-prop__list">
                            <li>Размер поставки — XL</li>
                            <li>Количество — 15 кг</li>
                        </ul>
                    </div>
                </div>
                <div class="border-bottom-dotted border-bottom-dotted--sm">
                    <div class="order-item-date">
                            <span class="order-item-date__icon">
                                 <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                      xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 55 55" x="0px" y="0px"
                                      style="width: 100%; height: auto;" preserveAspectRatio="none">
                                <g>
                                    <path stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M48.469,3.402h-8.956V0.851C39.513,0.38,39.134,0,38.663,0
                                        h-2.949c-0.47,0-0.851,0.38-0.851,0.851v2.551H16.156V0.851C16.156,0.38,15.776,0,15.306,0h-2.951c-0.47,0-0.85,0.38-0.85,0.851
                                        v2.551H2.551c-0.47,0-0.85,0.38-0.85,0.851v9.354v36.563c0,0.471,0.38,0.851,0.85,0.851h45.918c0.471,0,0.85-0.38,0.85-0.851
                                        V13.606V4.252C49.318,3.782,48.939,3.402,48.469,3.402z M3.401,5.102h8.103v2.552c0,0.47,0.38,0.85,0.85,0.85h2.951
                                        c0.47,0,0.851-0.38,0.851-0.85V5.102h18.707v2.552c0,0.47,0.381,0.85,0.851,0.85h2.949c0.471,0,0.85-0.38,0.85-0.85V5.102h8.106
                                        v10.655H3.401V5.102z M3.401,49.32V17.457h44.217V49.32H3.401z"></path>
                                </g>
                                <g>
                                    <rect x="11.114" y="25.198" width="3.813" height="3.813"></rect>
                                    <path d="M13.926,26.198v1.813h-1.813v-1.813H13.926 M15.926,24.198h-5.813v5.813h5.813V24.198L15.926,24.198z"></path>
                                </g>
                                <g>
                                    <rect x="22.739" y="25.198" width="3.812" height="3.813"></rect>
                                    <path d="M25.551,26.198v1.813h-1.812v-1.813H25.551 M27.551,24.198h-5.812v5.813h5.812V24.198L27.551,24.198z"></path>
                                </g>
                                <g>
                                    <rect x="34.385" y="25.198" width="3.813" height="3.813"></rect>
                                    <path d="M37.197,26.198v1.813h-1.813v-1.813H37.197 M39.197,24.198h-5.813v5.813h5.813V24.198L39.197,24.198z"></path>
                                </g>
                                <g>
                                    <rect x="11.114" y="36.198" width="3.813" height="3.813"></rect>
                                    <path d="M13.926,37.198v1.813h-1.813v-1.813H13.926 M15.926,35.198h-5.813v5.813h5.813V35.198L15.926,35.198z"></path>
                                </g>
                                <g>
                                    <rect x="22.739" y="36.198" width="3.812" height="3.813"></rect>
                                    <path d="M25.551,37.198v1.813h-1.813v-1.813H25.551 M27.551,35.198h-5.812v5.813h5.812V35.198L27.551,35.198z"></path>
                                </g>
                                <g>
                                    <rect x="34.385" y="36.198" width="3.813" height="3.813"></rect>
                                    <path d="M37.197,37.198v1.813h-1.813v-1.813H37.197 M39.197,35.198h-5.813v5.813h5.813V35.198L39.197,35.198z"></path>
                                </g>
                            </svg>
                            </span>
                        <span class="order-item-date__text">Дата доставки: 2.03 – 4.03</span>
                    </div>
                </div>
                <div class="border-bottom-dotted">
                    <table class="order-item-table">
                        <tbody>
                        <tr>
                            <td>Стоимость товаров в заказе:</td>
                            <td><b>1 356 грн</b></td>
                        </tr>
                        <tr>
                            <td>Скидка по промокоду:</td>
                            <td><b>0 грн</b></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="order-item-promo">
                        <form action="">
                            <input type="text"
                                   class="order-item-promo__input custom-input"
                                   placeholder="Введите промокод">
                        </form>
                    </div>
                </div>
                <div class="border-bottom-dotted">
                    <div class="order-item-total">
                        <span class="order-item-total__label">Сумма</span>
                        <span class="order-item-total__prop">1 356 грн</span>
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