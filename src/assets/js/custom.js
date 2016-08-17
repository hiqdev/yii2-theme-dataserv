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

    // DOMAIN CHECK
    $(document).on('click', 'a.add-to-cart-button', function(event) {
        event.preventDefault();
        var addToCartElem = $(this);
        addToCartElem.button('loading');
        $.post(addToCartElem.data('domain-url'), function() {
            Hisite.updateCart(addToCartElem.data('topcart'), function() {
                addToCartElem.button('complete');
                setTimeout(function () {
                    addToCartElem.addClass('disabled');
                }, 0);
            });
        });

        return false;
    });

    $.fn.isOnScreen = function(x, y){

        if(x == null || typeof x == 'undefined') x = 1;
        if(y == null || typeof y == 'undefined') y = 1;

        var win = $(window);

        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var height = this.outerHeight();
        var width = this.outerWidth();

        if(!width || !height){
            return false;
        }

        var bounds = this.offset();
        bounds.right = bounds.left + width;
        bounds.bottom = bounds.top + height;

        var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

        if(!visible){
            return false;
        }

        var deltas = {
            top : Math.min( 1, ( bounds.bottom - viewport.top ) / height),
            bottom : Math.min(1, ( viewport.bottom - bounds.top ) / height),
            left : Math.min(1, ( bounds.right - viewport.left ) / width),
            right : Math.min(1, ( viewport.right - bounds.left ) / width)
        };

        return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y;
    };

    $('.domain-list').domainsCheck({
        domainRowClass: '.domain-line',
        success: function(data, domain, element) {
            var $elem = $(element).find("div[data-domain='" + domain + "']");
            var $parentElem = $(element).find("div[data-domain='" + domain + "']").parents('div.domain-iso-line').eq(0);
            $elem.replaceWith($(data).find('.domain-line'));
            $parentElem.attr('class', $(data).attr('class'));

            return this;
        },
        beforeQueryStart: function (item) {
            var $item = $(item);
            if ($item.isOnScreen() && !$item.hasClass('checked') && $item.is(':visible')) {
                $item.addClass('checked');
                return true;
            }

            return false;
        },
        finally: function () {
            // init Isotope
            var grid = $('.domain-list').isotope({
                itemSelector: '.domain-iso-line',
                layout: 'vertical',
                // disable initial layout
                isInitLayout: false
            });
            //grid.isotope({ filter: '.popular' });
            // bind event
            grid.isotope('on', 'arrangeComplete', function () {
                $('.domain-iso-line').css({'visibility': 'visible'});
                $('.domain-list').domainsCheck().startQuerier();
            });
            // manually trigger initial layout
            grid.isotope();
            // store filter for each group
            var filters = {};
            $('.filters').on('click', 'a', function(event) {
                event.preventDefault();
                // get group key
                var $buttonGroup = $(this).parents('.filter-nav');
                var $filterGroup = $buttonGroup.attr('data-filter-group');
                // set filter for group
                filters[$filterGroup] = $(this).attr('data-filter');
                // combine filters
                var filterValue = concatValues(filters);
                // set filter for Isotope
                grid.isotope({filter: filterValue});

                $("html, body").animate({ scrollTop: $(".domain-form-container").offset().top }, 'fast');
            });
            // change is-checked class on buttons
            $('.filter-nav').each(function(i, buttonGroup) {
                $(buttonGroup).on( 'click', 'a', function(event) {
                    $(buttonGroup).find('.active').removeClass('active');
                    $(this).parents('li').addClass('active');
                });
            });
            // flatten object by concatting values
            function concatValues(obj) {
                var value = '';
                for (var prop in obj) {
                    value += obj[prop];
                }

                return value;
            }
        }
    });

    $(document).on("scroll", function() {
        if ($('.domain-list').length) {
            $('.domain-list').domainsCheck().startQuerier();
        }
    });
})(jQuery);
