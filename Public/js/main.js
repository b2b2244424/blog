/**
 * Created by tangchunlin on 15/7/8.
 */
requirejs.config({
    paths: {
        jquery: 'jquery.min'
    }
});
requirejs(['jquery', 'scrollto'], function ($, scrollto) {
    var scrollto = new scrollto.ScrollTo({});
    $('#backTop').on('click', $.proxy(scrollto.move, scrollto));
    $(window).on('scroll', function () {
        checkPosition(100);
    });

    checkPosition(100);

    //缓慢回到顶部
    function move() {
        $('body,html').animate({
            scrollTop: 0
        }, 800)
    }

    //迅速回到顶部
    function go() {
        $('body,html').scrollTop(0);
    }

    function checkPosition(pos) {
        if ($(window).scrollTop() > pos) {
            $('#backTop').fadeIn();
        } else {
            $('#backTop').fadeOut();
        }
    }
});