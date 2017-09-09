            <footer>
                <p>&copy;<?php date_default_timezone_set('UTC'); echo date("Y"); ?> elson mastering&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;all rights reserved</p>
            </footer>

        </div> <!-- container -->
        </div> <!-- panel -->

        <!-- build:js_bottom js/bottom.js -->
        <script src="bower/jquery/dist/jquery.min.js"></script>
        <script src="js/helper.js"></script>
        <script src="bower/slick-carousel/slick/slick.js"></script>
        <script src="js/app/core.js"></script>
        <script src="js/slideout.js"></script>
        <script>
            var slideout = new Slideout({
                'panel': document.getElementById('panel'),
                'menu': document.getElementById('menu'),
                'padding': 256,
                'side': 'right',
                'tolerance': 70
            });

            // Toggle button
            document.querySelector('.toggle-button').addEventListener('click', function() {
                slideout.toggle();
            });
        </script>
        <!-- endbuild -->
    </body>
</html>