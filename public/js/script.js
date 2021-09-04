(function ($) {
    "use strict"; // Start of use strict

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function () {
        $('.navbar-collapse').collapse('hide');
    });

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 61)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 56
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        let isHome = window.location.pathname == "/";
        if (isHome) {
            if ($("#mainNav").offset().top > 50) {
                $("#mainNav").addClass("navbar-shrink");
            } else {
                $("#mainNav").removeClass("navbar-shrink");
            }
        } else {
            $("#mainNav").addClass("navbar-shrink");
        }

    };


    // Remove do input ano, qualquer caractere que não seja um dígito e só permite a adição de quatro dígitos.
    $(function () {
        $("input[name='ano']").on('input', function (e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
            let text = $(this).val();
            if (text.length > 4) {
                $(this).val($(this).val().substring(0, 4));
            }
        });
    });

    // Impede que o select do id='tipo' abra ao da enter e submete a requisição
    $('#tipo').keypress(function (event) {
        if (event.which == 13) {
            event.preventDefault();
            $('form[name="form-filtro"]').submit();
        }
    });


    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

})(jQuery); // End of use strict
