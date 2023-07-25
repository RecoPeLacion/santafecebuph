(function($){

    // hamburger menu
    $(".sf_main-header--hamburger").on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('openMenu')
        $('.sf_main-header--menu').toggleClass('openNav')
        $('body').toggleClass('openNav')
    })

})(jQuery);