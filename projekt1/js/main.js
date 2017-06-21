//Menu
$('.dropdown > a, .dropdown-submenu > a').attr('data-toggle', 'dropdown');

$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
   event.preventDefault();
   event.stopPropagation();
   $(this).parent().siblings().removeClass('open');
   $(this).parent().toggleClass('open');
});

$('ul.dropdown-menu li a').on('click', function(event) {
   event.stopPropagation();
});

if ($('.dropdown').hasClass('active')) {
    $('.dropdown').find('.icon').removeClass('icon-chevron-down');
    $('.dropdown').find('.icon').addClass('icon-chevron-white');
} else {
    $('.dropdown').on('mouseenter', function() {
        $(this).find('.icon').removeClass('icon-chevron-down');
        $(this).find('.icon').addClass('icon-chevron-white');
    }).on('mouseleave', function() {
        $(this).find('.icon').removeClass('icon-chevron-white');
        $(this).find('.icon').addClass('icon-chevron-down');
    });
}

//Google Map Skin - Get more at http://snazzymaps.com/

function viewport() {
    var e = window, a = 'inner';
    if (!('innerWidth' in window )) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return e[ a+'Width' ];
}

if (viewport() < 992) {
    var isMobile = false;
}

var myOptions = {
    zoom: 15,
    center: new google.maps.LatLng(50.5377083, 18.0750076),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: false,
    scrollwheel: false,
    draggable: isMobile
};

var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);

//Marker position data
var markers = [
    ['Techno-Dent', 50.5377083, 18.0750076]
];

var bounds = new google.maps.LatLngBounds();

// Info Window Content
var infoWindowContent = [
    ['<div class="info-window">' +
    '<h3 style="color:#1d9bd0">Techno-Dent</h3>' +
    '<ul class="info-window-list"><li>Ul. Bronisławy 5</li><li>47-325 Kamień Śląski</li><li>tel/faks: 77 4671 176 </li><li>kom: 604 655 982</li><li>E-mail: <a href="mailto:technodent@wp.pl" title="technodent@wp.pl">technodent@wp.pl</a></li><li><a href="https://www.google.com/maps/dir/Current+Location/Bronisławy+5,+47-325+Kamień+Śląski" target="_blank" title="Wyznacz trasę">Wyznacz trasę</a></li></ul>' +        '</div>'],
];

// Display multiple markers on a map
var infoWindow = new google.maps.InfoWindow(), marker, i;

//Loop through markers and display them on the map
for( i = 0; i < markers.length; i++ ) {
    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
    bounds.extend(position);
    marker = new google.maps.Marker({
        position: position,
        map: map,
        title: markers[i][0],
        center: new google.maps.LatLng(0, 0)
    });

    infoWindow.setContent(infoWindowContent[i][0]);
    infoWindow.open(map, marker);

    map.panBy(0, -150);
}

//Smooth scroll

$(function() {
    $('a[href*=#]:not(.carousel-control)').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 106
                }, 700);
                return false;
            }
        }
    });
});

//Initialize owl carousel

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 5,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        margin: 20,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items: 1

            },
            // breakpoint from  up
            480 : {
                items: 2
            },
            // breakpoint from 992 up
            992 : {
                items: 3
            },
            // breakpoint from 1199 up
            1199 : {
                items: 5
            }
        }
    });
});
if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}