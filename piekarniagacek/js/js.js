/* NAVBAR BACKGROUND COLOR SCRIPT */
$(document).ready(function(){
    $(window).bind('scroll', function() {
        var navHeight = $( window ).height() - 10;
        if ($(window).scrollTop() > navHeight) {
            $('nav').addClass('navbarcolor');
        }
        else {
            $('nav').removeClass('navbarcolor');
        }
    });
});

/*var $cake = $('.navbar-cake');
var $win = $(window);

$win.on('scroll', function(){
    var top = $win.scrollTop() / 10;
    $cake.css('transform', 'translateX(' + top + 'vh)');

});*/
