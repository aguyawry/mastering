//
// Core scripts
//


$(document).ready( function() {

    // headroom - show hide header
    var myElement = document.querySelector('header');
    var headroom  = new Headroom(myElement, {
        'offset': 135,
        'tolerance': 5
    });
    headroom.init();

    // Auto-hide the header if not at the top of the page
    hide_header();

    // side menu
    $('.toggle-button').sidr({
        side: 'right',
        displace: false,
        onOpen: function() {
            $('.toggle-button').text('x');
        },
        onClose: function() {
            $('.toggle-button').html('&vellip;');
        }
    });

    $('#menu a').on('click', function (e) {
        $.sidr('close');
        // e.preventDefault();
        hide_header();
    } );

    // smooth scroll
    $('header a, #sidr a').smoothScroll({
        offset: -10,
        speed: 1000,
        afterScroll: function() {
            hide_header();
        }
    });

    // links open in external tabs/windows
    $('a[rel~="external"]').click( function() {
        window.open( $(this).attr('href') );
        return false;
    });

});



function hide_header() {
    if( window.scrollY != 0) {
        // setTimeout(function() {
            $('header').removeClass('headroom--pinned').addClass('headroom--unpinned');
        // }, 250);
    }
}