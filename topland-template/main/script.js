'use strict';


$(function () {
    var $overlay = $('#overlay');
    var $nav = $('#nav');
    var $showNav = $('#show-nav');
    var $header = $('#header');


    function setNavPos() {
        $overlay.stop(true);

        var windowTop = Math.max($(document).scrollTop(), $header.height() + $header.offset().top);
        var windowHeight = $(window).height();
        var windowBottom = windowTop + windowHeight;

        var overlayTop = $overlay.offset().top;
        var overlayHeight = $overlay.height();
        var overlayBottom = overlayTop + overlayHeight;

        if (overlayTop > windowTop) {
            $overlay.animate({
                top: windowTop
            });
        }

        if (overlayHeight > windowHeight) {
            if (overlayBottom < windowBottom) {
                $overlay.animate({
                    top: windowBottom - overlayHeight
                });
            }
        } else {
            if (overlayTop < windowTop) {
                $overlay.animate({
                    top: windowTop
                });
            }
        }
    }


    $(window).resize(function () {
        if ($(window).width() >= 992) {
            $overlay.css({
                opacity: '',
                display: ''
            });

            $nav.css({
                left: ''
            });

            setNavPos();
        } else {
            $overlay.stop(true).css({
                top: ''
            });
        }
    });

    $showNav.click(function () {
        $overlay.css({
            opacity: 0,
            display: 'block'
        }).animate({
            opacity: 1
        });

        $nav.css({
            left: '-100%'
        }).animate({
            left: 0
        });
    });

    $overlay.click(function () {
        if ($(window).width() < 992) {
            $overlay.animate({
                opacity: 0
            }, function () {
                $overlay.css({
                    opacity: '',
                    display: ''
                });
            });

            $nav.animate({
                left: '-100%'
            }, function () {
                $nav.css({
                    left: ''
                });
            });
        }
    });

    $(document).scroll(function () {
        if ($(window).width() >= 992) {
            setNavPos();
        }
    });

    if ($(window).width() >= 992) {
        setNavPos();
    }

    var colorblinded = window.localStorage.colorblinded !== 'true';
    $('#colorblinded').click(function (event) {
        event.preventDefault();

        window.localStorage.colorblinded = String(colorblinded = !colorblinded);

        if (colorblinded) {
            $('body').css('font-size', window.localStorage.fontSize || '19px');
            $('#nav, #show-nav, #header .title, #footer').addClass('no-blur');
            $('#header').css('background', 'transparent');
            $('#header .slogan').css('color', '#333');
            $('#font-size').show();
        } else {
            $('body').css('font-size', '');
            $('#nav, #show-nav, #header .title, #footer').removeClass('no-blur');
            $('#header').css('background', '');
            $('#header .slogan').css('color', '');
            $('#font-size').hide();
        }
    });
    $('#colorblinded').click();
    $('#font-size a').click(function (event) {
        event.preventDefault();

        $('body').css('font-size', window.localStorage.fontSize = $(this).css('font-size'));
    });
});