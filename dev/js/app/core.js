//
// Core scripts
//

$(document).ready( function() {

    // hide nav on scroll down, show on scroll up
    // for handhelds only: iPhone 6s+ landscape is 736, Lumia is 768
    // if( $(window).width() < 800)    // use and id here if we add more navs
    //     $('nav').headroom();


    // links open in external tabs/windows
    $('a[rel~="external"]').click( function() {
        window.open( $(this).attr('href') );
        return false;
    });

});