(function ($) {
    "use strict";

    $(window).load(function() {
        equalheight('#testimonials-carousel .testimonial-content, .newplanscolumn, .pricingbox .pricing-plan, .order-boxes .block-grid-item');
    });

    $(window).resize(function(){
        equalheight('#testimonials-carousel .testimonial-content, .newplanscolumn, .pricingbox .pricing-plan, .order-boxes .block-grid-item');
    });

    $(document).ready(function () {

        $('[data-toggle="popover"]').popover();
        $('[rel="shared-popover"]').popover({
            trigger: 'click',
            container: 'body',
            html: true,
            template: '<div class="popover sharing" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
            content: function () {
                var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
                return clone;
            }
        }).click(function(e) {
            e.preventDefault();
        });

        // ______________ TESTIMONIALS CAROUSEL
        if ($("#testimonials-carousel").length != 0) {
            $("#testimonials-carousel").owlCarousel({
                items: 3,
                autoPlay: 5000,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 2],
                itemsTablet: [768, 2]
            });
        }

        // ______________ RESPONSIVE MENU
        $('#navigation').superfish({
            delay: 300,
            animation: {
                opacity: 'show',
                height: 'show'
            },
            speed: 'fast',
            dropShadows: false
        });

        $(function () {
            $('#navigation').slicknav({
                label: "",
                closedSymbol: "&#8594;",
                openedSymbol: "&#8595;"
            });
        });

        // ______________ FIXED MENU AT SCROLL

        var nav = $('.header');
        if ($(window).width() > 767) {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 200) {
                    nav.addClass("f-nav fadeindown");
                } else {
                    nav.removeClass("f-nav fadeindown");
                }
            });
        }



        // ______________ MODAL LOGIN
        $('input').blur(function () {
            if ($(this).val())
                $(this).addClass('used');
            else
                $(this).removeClass('used');
        });

        // ______________ RIPPLE EFFECT
        $(function () {
            $('.ripple').materialripple();
        });

        // ______________ MATERIAL DESIGN FORM
        $(function () {
            $('form.material').materialForm();
        });

        // ______________ ANIMATE EFFECTS
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false
        });
        wow.init();

        // ______________ BACK TO TOP BUTTON
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('#back-to-top').fadeIn('slow');
            } else {
                $('#back-to-top').fadeOut('slow');
            }
        });
        $('#back-to-top').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

    });


})(jQuery);
