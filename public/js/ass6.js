/**
 * Created by Manmeet on 13-06-2015.
 */
$(document).ready(function() {
    /*Tabs*/
    $(function() {
         $( "#tabs" ).tabs();
    });

    /*Tab1*/

    /*Tab2*/
    $('.btnScrollUp').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 1500);
        return false;
    });

    $('.btnScrollDown').click(function() {
        var p = $('#para7');
        var offset = p.offset();
        console.log(offset);
        $("html, body").animate({ scrollTop: offset.top }, 1500);
        return false;
    });

    /*Tab3*/

    /*Tab4*/
    $('.arrow-next').click(function() {
        var currentSlide = $('.active-slide');
        var nextSlide = currentSlide.next();
        var currentDot = $('.active-dot');
        var nextDot = currentDot.next();
        if (nextSlide.length == 0) {
            nextSlide = $('.slide').first();
            nextDot = $('.dot').first();
        }
        currentDot.removeClass('active-dot');
        nextDot.addClass('active-dot');
        currentSlide.fadeOut(600).removeClass('active-slide');
        nextSlide.fadeIn(600).addClass('active-slide');
    });

    $('.arrow-prev').click(function() {
        var currentSlide = $('.active-slide');
        var prevSlide = currentSlide.prev();
        var currentDot = $('.active-dot');
        var prevDot = currentDot.prev();
        if (prevSlide.length == 0) {
            prevSlide = $('.slide').last();
            prevDot =  $('.dot').last();
        }
        currentDot.removeClass('active-dot');
        prevDot.addClass('active-dot');
        currentSlide.fadeOut(600).removeClass('active-slide');
        prevSlide.fadeIn(600).addClass('active-slide');
    });

    /*tab5*/

});

function showValue(newValue) {
    document.getElementById("range").innerHTML=newValue + " degrees";

    $('#imageTab1').css({'-transform':'rotate('+ newValue +'deg)',
        '-webkit-transform': 'rotate(' + newValue + 'deg)',
        '-moz-transform': 'rotate(' + newValue + 'deg)',
        '-ms-transform': 'rotate(' + newValue + 'deg)',
        '-o-transform': 'rotate(' + newValue + 'deg)'

    });
}