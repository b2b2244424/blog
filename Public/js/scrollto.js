/**
 * Created by tangchunlin on 15/7/8.
 */
define(['jquery'], function ($) {
    function ScrollTo(opts) {
        this.opts = $.extend({}, ScrollTo.DEFAULTS, opts);
        this.$el = $('body,html');
    }

    ScrollTo.prototype.move = function () {
        var opts = this.opts;

        if ($(window).scrollTop() != this.opts.dest) {
            if (!this.$el.is(':animated')) {
                this.$el.animate({
                    scrollTop: opts.dest
                }, opts.speed);
            }
        }
    };

    ScrollTo.prototype.go = function () {
        if ($(window).scrollTop() != this.opts.dest) {
            this.$el.scrollTop(this.opts.dest);
        }
    };

    ScrollTo.DEFAULTS = {
        dest: 0,
        speed: 800
    };

    return {
        ScrollTo: ScrollTo
    };
});