                <footer>
                    <p>&copy;<?php date_default_timezone_set('UTC'); echo date("Y"); ?> elson mastering&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;all rights reserved</p>
                </footer>

            </div> <!-- container -->
        </div>


        <div off-canvas="slider right overlay">
            <nav id="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about-section">About</a></li>
                    <li><a href="#gear-section">Gear</a></li>
                    <li><a href="#contact-section">Contact</a></li>
                </ul>
            </nav>
        </div>

        <!-- build:js_bottom js/bottom.js -->
        <script src="bower/jquery/dist/jquery.min.js"></script>
        <script src="js/helper.js"></script>
        <script src="bower/slick-carousel/slick/slick.js"></script>
        <script src="bower/slidebars/dev/slidebars.js"></script>
        <script src="js/app/core.js"></script>
        <script>
            ( function ( $ ) {
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
            </script>
        <!-- endbuild -->
    </body>
</html>