//
// Core scripts
//


$(document).ready( function() {

    // side menu
    $('.toggle-button').sidr({
        side: 'right',
        onOpen: function() {
            $('.toggle-button').text('x');
        },
        onClose: function() {
            $('.toggle-button').html('&vellip;');
        }
    });

    $('#menu a').on('click', function () {
        $.sidr('close');
    } );

    // links open in external tabs/windows
    $('a[rel~="external"]').click( function() {
        window.open( $(this).attr('href') );
        return false;
    });

});