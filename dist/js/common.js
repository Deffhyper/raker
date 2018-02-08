$(document).ready(function () {

    var windowWidth = $(document).width();

    // media query

    var screenTabletQuery = window.matchMedia("(max-width: 991px)");



    //////////////////////////////////////////// masked tel input ////////////////

    $('.tel-input').mask("+38(099)999-99-99", {autoclear: false});

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
        "bg_width": 0,
        "fg_width": 0,
        "circle_bg_color": "transparent",
        "time": {
            "Days": {
                "text": "дней",
                "color": "transparent",
                "show": true
            },
            "Hours": {
                "text": "часов",
                "color": "transparent",
                "show": true
            },
            "Minutes": {
                "text": "минут",
                "color": "transparent",
                "show": true
            },
            "Seconds": {
                "text": "секунд",
                "color": "transparent",
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
            var $offsetTop = $prev.offset().top - 5;

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
    
    /////////////////////////////////// auth modals /////////////////////////////////////////
    $('#toRegModal').on('click', function () {
        $('#auth-modal').modal('hide');
    });

    $('.modal').on('hidden.bs.modal', function () {
        $('body').removeAttr('style');
        $('body').removeClass('modal-open');
    });

    /////////////////////////////////////// map modal ////////////////////////////////////

    var mapLt = null,
        mapLg = null,
        marker = null,
        myLatlng = {lat: 0, lng: 0},
        map;

    $('.goods-hrz-prop-locate').on('click', function () {
        mapLt = Number($(this).data('center-lt'));
        mapLg = Number($(this).data('center-lg'));
        myLatlng.lat = mapLt;
        myLatlng.lng = mapLg;
    });

    function initialize() {
        map = new google.maps.Map(document.getElementById('map'),{
            center: myLatlng,
            scrollwheel: false,
            zoom: 12
        });
    }
    initialize();

    $('#map-modal').on('shown.bs.modal', function () {
        google.maps.event.trigger(map, "resize");
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        map.panTo(myLatlng)
    });

    $('#map-modal').on('hidden.bs.modal', function () {
        marker.setMap(null);
    });



    function countdown (elem ,lastDay) {
        var lastDay = lastDay;

        var names = {days:      {1:"день", 2:"дня", 3: "дней"},
            hours:     {1:"час", 2: "часа", 3: "часов"},
            minutes:   {1:"минута", 2: "минуты", 3: "минут"},
            seconds:   {1:"секунда", 2: "секунды", 3: "секунд"}
        };
        var day_name = names['days'][3];
        var hur_name = names['hours'][3];
        var min_name = names['minutes'][3];
        var sec_name = names['seconds'][3];

        var today = new Date();
        var timeLeft = (lastDay.getTime() - today.getTime());

        var e_daysLeft = timeLeft / 86400000;
        var daysLeft = Math.floor(e_daysLeft);

        var slice_day = String(daysLeft).slice(-1);
        if(parseInt(slice_day) == 1 && (parseInt(daysLeft) < 10 || parseInt(daysLeft) > 20)){
            day_name = names['days'][1];
        }else if((parseInt(slice_day) == 2 || parseInt(slice_day) == 3 || parseInt(slice_day) == 4) && (parseInt(daysLeft) < 10 || parseInt(daysLeft) > 20)){
            day_name = names['days'][2];
        }else{
            day_name = names['days'][3];
        }

        var e_hrsLeft = (e_daysLeft - daysLeft)*24;
        var hrsLeft = Math.floor(e_hrsLeft);
        if(hrsLeft < 10){
            hrsLeft = '0'+hrsLeft;
        }
        var slice_hours = String(hrsLeft).slice(-1);
        if(parseInt(slice_hours) == 1 && (parseInt(hrsLeft) < 10 || parseInt(hrsLeft) > 20)){
            hur_name = names['hours'][1];
        }else if((parseInt(slice_hours) == 2 || parseInt(slice_hours) == 3 || parseInt(slice_hours) == 4)  && (parseInt(hrsLeft) < 10 || parseInt(hrsLeft) > 20)){
            hur_name = names['hours'][2];
        }else{
            hur_name = names['hours'][3];
        }

        var e_minsLeft = (e_hrsLeft - hrsLeft)*60;
        var minsLeft = Math.floor(e_minsLeft);
        if(minsLeft < 10){
            minsLeft = '0'+minsLeft;
        }
        var slice_min = String(minsLeft).slice(-1);
        if(parseInt(slice_min) == 1 && (parseInt(minsLeft) < 10 || parseInt(minsLeft) > 20)){
            min_name = names['minutes'][1];
        }else if((parseInt(slice_min) == 2 || parseInt(slice_min) == 3 || parseInt(slice_min) == 4) && (parseInt(minsLeft) < 10 || parseInt(minsLeft) > 20)){
            min_name = names['minutes'][2];
        }else{
            min_name = names['minutes'][3];
        }

        var seksLeft = Math.floor((e_minsLeft - minsLeft)*60);
        if(seksLeft < 10){
            seksLeft = '0'+seksLeft;
        }
        var slice_sec = String(seksLeft).slice(-1);
        if(parseInt(slice_sec) == 1 && (parseInt(seksLeft) < 10 || parseInt(seksLeft) > 20)){
            sec_name = names['seconds'][1];
        }else if((parseInt(slice_sec) == 2 || parseInt(slice_sec) == 3 || parseInt(slice_sec) == 4) && (parseInt(seksLeft) < 10 || parseInt(seksLeft) > 20)){
            sec_name = names['seconds'][2];
        }else{
            sec_name = names['seconds'][3];
        }

        if ( timeLeft > 0 ) {
            elem.html(
                "<span>"
                +"<span>"+daysLeft+"</span><span> </span>"
                +"<span>"+day_name+" </span>"
                +"</span>"
                +"<span>"
                +"<span>"+hrsLeft+":</span>"
                +"</span>"
                +"<span>"+minsLeft+":</span>"
                +"</span>"
                +"<span>"
                +"<span>"+seksLeft+"</span>"
                +"</span>");
        } else {
            $(this).html("");
        }
    }


    $('.countdown-string').each(function () {
        var $that = $(this);
        var cLast = new Date(String($(this).data('end')));
        setInterval(function () {
            countdown($that, cLast);
        }, 1000);

    });


    /////////////////////////////////////////////////// scroll to top ///////////////////////

    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#scroll-up').fadeIn(600);
        } else {
            $('#scroll-up').fadeOut(600);
        }
    });

    $('#scroll-up').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });



});

