
// BUTTON SCROLL TO TOP SHOW UP AFTER 250PX
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
$(function() {
        $(".scroll, .navbar-brand").click(function(){
            $("html,body").animate({
                scrollTop:$(".thetop").offset().top},"3000");
            return false})
    }
)

/* NAVBAR SHOW UP SKRYPT */

$(document).ready(function(){
    $(window).bind('scroll', function() {
        var navHeight = $( window ).height() - 70;
        if ($(window).scrollTop() > navHeight) {
            $('nav').addClass('fixed');
        }
        else {
            $('nav').removeClass('fixed');
        }
    });
});



//SMOOTH SCROLLING SKRYPT:

// Add smooth scrolling on all links inside the navbar
$('#main-navbar a, header a').on('click', function(event) {

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

// AOS ANIMACJA

AOS.init({
    duration: 1000,
});

$(document).ready(function(){
    $("#hide").click(function(){
        $(".hidden-row-images").hide(1000);
    });
    $("#show").click(function(){
        $(".hidden-row-images").show(1000);
    });
});

