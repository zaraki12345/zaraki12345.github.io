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

// BUTTON SCROLL TO TOP SHOW UP AFTER 40PX
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

//SMOOTH SCROLLING SKRYPT:

// Add smooth scrolling on all links inside the navbar
$('#main-navbar a, header a, #myBtn').on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });

    } // End if

});