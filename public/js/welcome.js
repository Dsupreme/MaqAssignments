$(document).ready(function() {

    $('.parallax').parallax();

    $('.modal-trigger').leanModal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            in_duration: 300, // Transition in duration
            out_duration: 200 // Transition out duration
        }
    );

    var a = 10;
    var i = setInterval( timer, 1000 );

    var offset = $('#about').position();
    offset = offset.top;
    console.log(offset);
    var duration = 600;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.goto-top-arrow').fadeIn(duration);
        } else {
            jQuery('.goto-top-arrow').fadeOut(duration);
        }
    });

    jQuery('.goto-top-arrow').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    });

    function timer() {
        if ( a < 1 ) {
            var currentSlide = $('.active-slide');
            var nextSlide = currentSlide.next();
            if (nextSlide.length == 0) {
                nextSlide = $('.slide').first();
            }
            currentSlide.fadeOut(600).removeClass('active-slide');
            nextSlide.fadeIn(600).addClass('active-slide');
            a=10;
            return;
        }
        a -= 1;
    }
    $('.arrow-next').click(function() {
        var currentSlide = $('.active-slide');
        var nextSlide = currentSlide.next();
        if (nextSlide.length == 0) {
            nextSlide = $('.slide').first();
        }
        currentSlide.fadeOut(600).removeClass('active-slide');
        nextSlide.fadeIn(600).addClass('active-slide');
    });

    $('.arrow-prev').click(function() {
        var currentSlide = $('.active-slide');
        var prevSlide = currentSlide.prev();
        if (prevSlide.length == 0) {
            prevSlide = $('.slide').last();
        }
        currentSlide.fadeOut(600).removeClass('active-slide');
        prevSlide.fadeIn(600).addClass('active-slide');
    });
});
