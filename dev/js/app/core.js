//
// Core scripts
//

$(document).ready( function() {

    var carousel = $("#carousel");

    // slick carousel init event, must come before carousel init!
    // change container opacity to prevent flash of markup, initially 0
    carousel.on('init', function(event, slick){
        $(this).css('opacity', 1);
    });


    // setup a random slide to start the carousel, slide order will already be shuffled
    var total = $('#carousel img').length,
        rand = Math.floor( Math.random() * total );


    // create the carousel
    carousel.slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        easing: 'swing',
        fade: true,
        speed: 1500
    }).slick('slickGoTo', rand);

    
    // hide nav on scroll down, show on scroll up
    // for handhelds only: iPhone 6s+ landscape is 736, Lumia is 768
    if( $(window).width() < 800)    // use and id here if we add more navs
        $('nav').headroom();


    // links open in external tabs/windows
    $('a[rel~="external"]').click( function() {
        window.open( $(this).attr('href') );
        return false;
    });

});