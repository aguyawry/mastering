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


    // Close any
    $('#menu a').on('click', function () {
        controller.close();
    } );

} ) ( jQuery );