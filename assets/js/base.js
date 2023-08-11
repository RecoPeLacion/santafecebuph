(function($){

    // hamburger menu
    $(".sf_main-header--hamburger").on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('openMenu')
        $('.sf_main-header--menu').toggleClass('openNav')
        $('body').toggleClass('openNav')
    })

    // Open Modal Event Listener
    $(document).on('click', '.sf_videos--openModal', function(e) {
        e.preventDefault();
        var modalId = $(this).data('modal');
        $('#' + modalId).addClass('show-modal');
    });

    // Close Modal Event Listener
    $(document).on('click', '.close, .modalVideo', function(event) {
        var modalContent = $(event.target).closest('.modal-content');
        if (!modalContent.length) {
            $('.modalVideo').removeClass('show-modal');
        }
    });

    $(document).on('click', '.close', function(e) {
        e.preventDefault();
        $('.modalVideo').removeClass('show-modal');
    });

    // sticky on scroll
    $(window).scroll(function() {
        if ($(this).scrollTop() > 250) {  
            $('.sf_main-header--nav').addClass("sticky");
        }
        else{
            $('.sf_main-header--nav').removeClass("sticky");
        }
    });

})(jQuery);