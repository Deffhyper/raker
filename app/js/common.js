$(function() {

    var windowWidth = $(document).width();

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

    /////////////////////////////// top banner slider /////////////////////

    $('.top-banner-slider').slick({
        arrows: false,
        slideToShow: 1,
        slideToScroll: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000
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
            $goodsSlider.slick('unslick');
        }
    }

    $(window).ready(toggleGoodsSidebar(windowWidth)).resize(function () {
        toggleGoodsSidebar(window.innerWidth);
    });



});