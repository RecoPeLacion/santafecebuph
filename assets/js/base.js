(function($){

    // trigger modal
    $('.sf_searchToggle').on('click', function(e) {
        e.preventDefault();
        $('.sf_searchFormModal').toggleClass('is-visible');
        $('body').toggleClass('ov-hidden');
    });

    // slider
    $('.sf_slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        autoplaySpeed: 5000,
        autoplay: true,
        fade: true,
        cssEase: 'linear'
    });

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

    // timer
    function makeTimer() {

        //	var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
        var endTime = new Date("30 December 2023 9:56:00 GMT+01:00");			
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
    
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }

            $("#sf_days").html("<span class='sf_timer_num'>" + days + "</span>" + "<span>Days</span>");
            $("#sf_hours").html("<span class='sf_timer_num'>" + hours + "</span>" + "<span>Hours</span>");
            $("#sf_minutes").html("<span class='sf_timer_num'>" + minutes + "</span>" + "<span>Minutes</span>");
            $("#sf_seconds").html("<span class='sf_timer_num'>" + seconds + "</span>" + "<span>Seconds</span>");		

    }
    setInterval(function() { makeTimer(); }, 1000);

})(jQuery);


