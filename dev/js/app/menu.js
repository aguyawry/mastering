( function ( $ ) {
    // https://www.adchsm.com/slidebars/
    // Initialize Slidebars
    var controller = new slidebars();
    controller.init();

    // Toggle Slidebars
    $( '.toggle-button' ).on( 'click', function ( event ) {
        // Stop default action and bubbling
        event.stopPropagation();
        event.preventDefault();

        // Toggle the Slidebar with id 'id-1'
        controller.toggle('slider');
    } );

    // Close the sidebar on menu selection
    $('#menu a').on('click', function () {
        controller.close();
    } );

    $( controller.events ).on( 'opening', function ( event, id ) {
        $('.toggle-button').text('x');
    } );

    $( controller.events ).on( 'closing', function ( event, id ) {
        $('.toggle-button').html('&vellip;');
    } );

} ) ( jQuery );