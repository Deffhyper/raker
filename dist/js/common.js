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



});