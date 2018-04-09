//
// Core scripts
//


$(document).ready( function() {

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
        e.preventDefault();
    } );

    // links open in external tabs/windows
    $('a[rel~="external"]').click( function() {
        window.open( $(this).attr('href') );
        return false;
    });

    // smooth scroll
    $('header a, #sidr a').smoothScroll({
        speed: 1000
    });

    // headroom - show hide header
    var myElement = document.querySelector('header');
    var headroom  = new Headroom(myElement, {
        'offset': 110
    });
    headroom.init(); 

});