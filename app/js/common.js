$(document).ready(function () {

    var windowWidth = $(document).width();

    // media query

    var screenTabletQuery = window.matchMedia("(max-width: 991px)");

    ////////////////////////////////// mobile footer ///////////////////////////////////////

    function bindJsOnMobile(windowWidth) {

        var pageFtitle = $('.site-footer-title');

        if (windowWidth < 768) {
            pageFtitle.unbind('click').click(function () {
                $(this).next().slideToggle();
                $(this).toggleClass('rotate');
            })
        } else {
            pageFtitle.unbind('click');
            pageFtitle.next().removeAttr('style');
            pageFtitle.removeClass('rotate');
        }
    }

    $(window).ready(bindJsOnMobile(windowWidth)).resize(function () {
        bindJsOnMobile(window.innerWidth);
    });

    /////////////////////////////////// mob menu //////////////////////////
    var mobMenuBlur = $('<div/>', {
        class: "mob-menu-blur"
    });

    $('.burger-button').on('click', function (e) {
        e.preventDefault();
        if(!$(this).hasClass('open') && $(this).siblings()) {
            $(this).addClass('open');
            $('body').append(mobMenuBlur);
            $('.mob-menu').css('left', 0);
        } else {
            $(this).removeClass('open');
            $('body').find('.mob-menu-blur').remove();
            $('.mob-menu').removeAttr('style');
        }

    });

    $(document).on('click', '.mob-menu-blur, .mob-menu-close', function () {
        $('.burger-button').trigger('click');
    });

    $(window).resize(function () {
        if($(this).innerWidth() > 1260 && $('.burger-button').hasClass('open')) {
            $('.mob-menu-close').trigger('click');
        }
    });


    ///////////////////////////////// sidebar ///////////////////////////////

    $(document).on('click', '.right-sidebar-list__title', function () {
        if(!$(this).hasClass('open')){
            $(this).addClass('open');
            $(this).next().slideDown();
        } else {
            $(this).removeClass('open');
            $(this).next().slideUp();
        }
    });

    function togleMobRightSidebar(windowWidth) {

        var sTitle = $('.right-sidebar-title');

        if (windowWidth < 991) {
            sTitle.unbind('click').click(function () {
                $(this).next().slideToggle();
                $(this).toggleClass('rotate');
            })
        } else {
            sTitle.unbind('click');
            sTitle.next().removeAttr('style');
            sTitle.removeClass('rotate');
        }
    }

    $(window).ready(togleMobRightSidebar(windowWidth)).resize(function () {
        togleMobRightSidebar(window.innerWidth);
    });




    ////////////////////////////////// countdown //////////////////////////

    $(".DateCountdown").TimeCircles({
        "animation": "ticks",
        "bg_width": 0.9,
        "fg_width": 0.056666666666666664,
        "circle_bg_color": "rgba(0,0,0, .4)",
        "time": {
            "Days": {
                "text": "Дней",
                "color": "#ffffff",
                "show": true
            },
            "Hours": {
                "text": "Часов",
                "color": "#ffffff",
                "show": true
            },
            "Minutes": {
                "text": "Минут",
                "color": "#ffffff",
                "show": true
            },
            "Seconds": {
                "text": "Секунд",
                "color": "#FF9999",
                "show": false
            }
        }
    });

    $(window).resize(function(){
        $(".DateCountdown").TimeCircles().rebuild();
    });

    /////////////////////////////// top banner slider /////////////////////

    $('.top-banner-slider').slick({
        arrows: false,
        slideToShow: 1,
        slideToScroll: 1,
        dots: true
        // autoplay: true,
        // autoplaySpeed: 5000
    });

    ////////////////////////////////// responsive goods slider main page //////////////////

    function toggleGoodsSidebar(windowWidth) {

        var $goodsSlider = $('.main-goods-list');

        if (windowWidth < 768) {
            if(!$goodsSlider.hasClass('slick-initialized')) {
                $goodsSlider.slick({
                    arrows: true,
                    slideToShow: 1,
                    slideToScroll: 1,
                    dots: false
                });
            }
        } else {
            if($goodsSlider.hasClass('slick-initialized')){
                $goodsSlider.slick('unslick');
            }

        }
    }

    $(window).ready(toggleGoodsSidebar(windowWidth)).resize(function () {
        toggleGoodsSidebar(window.innerWidth);
    });

    //////////////////////////////////////// activity slider //////////////////////

    $('.activity-slider__top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        infinite: false,
        asNavFor: '.activity-slider__nav'
    });

    $('.activity-slider__nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.activity-slider__top',
        dots: false,
        arrows: false,
        infinite: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            }
        ]
    });


    ///////////////////////////////////////////////// nav mobile /////////////////////////////////////

    function bindJsOnFilterSelectTablet(windowWidth) {
        var nav = $('.nav.nav-goods').find('.init');
        var allOptions = $('.nav__list');

        if (windowWidth < 992) {
            nav.unbind('click').on("click", function(e) {
                allOptions.slideToggle();
                $(this).toggleClass('open');
            });

            allOptions.on("click", 'li', function(e) {
                e.preventDefault();
                allOptions.removeClass('selected');
                $(this).addClass('selected');
                nav.children('a').html($(this).find('.nav-button__text').html());
                allOptions.slideToggle();
                nav.removeClass('open');
            });
        } else {
            nav.unbind('click');
            allOptions.find('li').removeAttr('style');
        }
    }

    $(window).ready(bindJsOnFilterSelectTablet(windowWidth)).resize(function () {
        bindJsOnFilterSelectTablet(window.innerWidth);
    });


    ////////////////////////////////////// date picker ///////////////////////////////////

    $('.custom-date').datepicker({
        language: 'ru',
        autoclose: true
    });


    ///////////////////////////////////// tooltip trigger ////////////////////////////////
    function closeTooltip() {
        $('.icon-tooltip').removeClass('open').fadeOut();
        $('.icon-tooltip-trigger').removeClass('opened');
        $('.icon-tooltip-trigger').parent().removeClass('open');
    }

    $('.icon-tooltip-trigger').on('click', function (e) {
        e.preventDefault();
        closeTooltip();

        $(this).parent().toggleClass('open');

        $(this).parent().siblings().find('.icon-tooltip').removeClass('open').fadeOut();
        if($(this).hasClass('opened')){
            $(this).next('.icon-tooltip').removeClass('open').fadeOut();
            $(this).removeClass('opened');
        } else {
            $(this).next('.icon-tooltip').addClass('open').fadeIn();
        }
    });

    $('.icon-tooltip__close').on('click', function(){
        closeTooltip();
    });

    $(document).on('click', function (e) {
        var $target = $(e.target);
        if(!$target.closest('.icon-tooltip').length && !$target.closest('.icon-tooltip-trigger').length) {
            closeTooltip();
        }
    });


    ///////////////////////////////////// three item slider ////////////////////////////

    $('.three-item-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    ///////////////////////////////////// one item slider ////////////////////////////

    $('.one-item-slider').slick({
        slidesToShow: 1,
        dots: false,
        arrows: true,
        infinite: true
    });

    /////////////////////////////////// goods count //////////////////////////////////////


    $('.product-amount__block').on('click', function(event){
        var $target = $(event.target);
        var inputVal = $(this).find('.product-amount__input').val();
        var currentVal = Number((inputVal.replace(/шт(\.)?/g, "")).trim());

        console.log(currentVal);

        if($target.hasClass('dec') && currentVal >= 2) {
            --currentVal;
            $(this).find('.product-amount__input').val(currentVal);
        } else if ($target.hasClass('inc')) {
            ++currentVal;
            $(this).find('.product-amount__input').val(currentVal);
        }
    });


    $(".product-amount__input").on('keyup keydown', function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    ///////////////////////////////////// location-tip//////////////////////////////////////

    $('.form-location-tip').on('click', function (e) {
        e.preventDefault();
        var $target = $(e.target);
        $(this).prev('.custom-input').val($target.text());
    });

    ////////////////////////////////////// tab lk /////////////////////////////////////////

    $('.lk-tab__header li a').on('click', function (e) {
        e.preventDefault();
        var parentElem = $(this).parent(),
            indexElem = parentElem.index(),
            grandParentElem = parentElem.closest('.lk-tab');

        parentElem.addClass('active').siblings().removeClass('active');
        grandParentElem.find('.lk-tab__body').children().eq(indexElem).addClass('active').siblings().removeClass('active');
    });

    /////////////////////////////////////////// lk steps /////////////////////////////////////////////

    $('.lk-steps-item').on('click', function (e) {
        var $target = $(e.target),
            str = "",
            str2 = "",
            str3 = "",
            str4 = "",
            parent = $target.closest('.lk-steps-item'),
            output = parent.find('.lk-output'),
            that = $(this);

        function switchStep() {
            if(!parent.next().hasClass('activated')){
                parent.next().find('.lk-steps-content').slideDown('slow');
                parent.next().addClass('active');
                parent.next().find('.lk-output').empty();
                output.slideDown();
            }
        }

        function closeStep() {
            parent.find('.lk-steps-content').slideUp('slow');
            parent.removeClass('active');
            parent.addClass('activated');
        }

        function reopenStep() {
            that.find('.lk-steps-content').slideDown('slow');
            that.find('.lk-output').slideDown('slow').empty();
        }

        // change
        if($target.hasClass('gray-dashed-link')) {
            e.preventDefault();
            reopenStep();
            that.find('.btn').text('Изменить');


            // logic for the first step
        } else if ($target.hasClass('btn') && $(this).hasClass('lk-step-one')){
            e.preventDefault();
            $target.closest('form').find('input').each(function (index) {
                if(index < 3) {
                    str += $(this).val()+' ';
                } else if(index == 3){
                    str2+=$(this).val();
                } else if(index == 4){
                    str4+=$(this).val();
                }
            });
            output.append('<p>'+str+'</p>');
            output.append('<p>'+str2+'</p>');
            output.append('<p> Город: '+str4+'</p>');

            closeStep();
            switchStep();

            // logic for the second step
        } else if ($target.hasClass('btn') && $(this).hasClass('lk-step-two')){
            e.preventDefault();

            $target.closest('form').parent('.active').find('input').each(function () {
                if($(this).prop('checked')) {
                    str3 += $(this).next().text();
                }
            });
            output.append('<p>'+str3+'</p>');

            closeStep();
            switchStep();

        }

        // logic for the third step

    });


    /////////////////////////////////////// remove order from DOM ///////////////////////

    $('.order-item-header').find('.close-btn').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.order-item').remove();
    });
    
    /////////////////////////// order list dropdown //////////////////////////////////////////////////
    
    $('.order-item-list').find('.order-item-header').on('click', function () {

        var $prev = $(this).parent('.order-item'),
            $prevSiblings = $prev.siblings();

        $.when(
            $(this).toggleClass('open').promise(),
            $(this).find('.order-item__preview').slideToggle().promise(),
            $(this).next('.order-item__detail-info').slideToggle().promise(),
            $prevSiblings.find('.order-item-header').removeClass('open').promise(),
            $prevSiblings.find('.order-item__preview').slideDown().promise(),
            $prevSiblings.find('.order-item__detail-info').slideUp().promise()

        ).done(function() {
            var $offsetTop = $prev.offset().top;

            $('body,html').animate({
                scrollTop: $offsetTop
            }, 700);

        });

    });

    /////////////////////////////////// lk mobile menu ///////////////////////////////////

    if (matchMedia) {
        screenTabletQuery.addListener(checkMediaLkMobile);
        checkMediaLkMobile(screenTabletQuery);
    }

    function checkMediaLkMobile(e) {
        if (e.matches) {
            $('.lk-mob-navigate-trigger').on('click', function () {
                $(this).toggleClass('open');
                $('.lk-mob-navigate-items').slideToggle();
            });
        } else {
            $('.lk-mob-navigate-items').removeAttr('style');
            $('.lk-mob-navigate-trigger').unbind('click');
        }
    }




});