$(document).ready(function() {
    if (window.matchMedia("(min-width: 780px)").matches) {
        var fade = $('.fade');
        var aproposTop = $('#aPropos').position().top -1;
        $(window).scroll( function(){
            fade.each( function(i){
                var bottom_of_object = $(this).position().top + ($(this).outerHeight() / 3);
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                if( bottom_of_window > bottom_of_object ){
                    $(this).animate({'opacity':'1'},200);
                }
            });
        });
        $(window).scroll(function() {
            if ($(window).scrollTop() > aproposTop ){
                $('.nav2').css('display','flex');
            } else {
                $('.nav2').css('display','none');
            };   	
        });
    } else {
        $('.fade').css('opacity','1');
    }
    //Smooth scroll
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
        if ( location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({scrollTop: target.offset().top}, 800, function() {
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { 
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });
});