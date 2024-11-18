;(function ($) {

    // utils();


    $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function (event) {
        console.log(event);
        event.preventDefault();
        event.stopPropagation();

        $(this).parent().siblings("li.dropdown-submenu").children(".dropdown-menu").removeClass("show");
        $(this).siblings().toggleClass("show");


        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-submenu .show').removeClass("show");
        });

    });


    $('i.delete').on('click', function () {
        $(this).parents('.item').fadeOut();
    });


    // ------------------------------------------------------- //
    // Open & Close Search Panel
    // ------------------------------------------------------ //
    $('.search').on('click', function () {
        $('.search-area').fadeIn();
    });

    $('.search-area .close-btn').on('click', function () {
        $('.search-area').fadeOut();
    });

    // ------------------------------------------------------- //
    // Scroll to top button
    // ------------------------------------------------------ //
    // Scroll to top button
    $(window).on('scroll', function () {
        if ($(window).scrollTop() >= 1500) {
            $('#scrollTop').fadeIn();
        } else {
            $('#scrollTop').fadeOut();
        }
    });


    $('#scrollTop').on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });
   
})(jQuery);