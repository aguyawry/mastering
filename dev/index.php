<?php
    $page = "home";
    $title = "mastering studio | elson mastering";
    $description = "elson mastering provides high-quality audio mastering services to artists, labels and music producers throughout the world.";
    $keywords = "scott elson, mastering, audio mastering, music, audio encoding, music production, audio restoration, transfers, archives, forensic audio, maine";
    include "top.php";
?>

<section class="center">
    <div id="carousel">
        <?php
            // read data from json file, shuffle it and loop to create the carousel
            // note, slick's lazy loading feature is being used for images
            $json = json_decode( file_get_contents('js/projects.json') );
            shuffle( $json->projects );
            foreach ($json->projects as $data) {
                echo "<div>";
                echo "    <img data-lazy='img/carousel/" . $data->img . "' alt='"  . $data->alt . "'>";
                echo "    <h4>" . $data->artist . "</h4>";
                echo "</div>";
            }
        ?>
    </div>
</section>

<section class="left">
    <div class="page">
        <h2>Welcome</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper, purus sed aliquam volutpat, ipsum felis faucibus purus, a aliquet dui eros eget leo. Cras id justo in justo rutrum ultrices in eget ligula. Suspendisse potenti. Suspendisse molestie neque quis laoreet pharetra. Aenean maximus fermentum fermentum. In hac habitasse platea dictumst. Donec dignissim eget leo id tincidunt.</p>
    </div>
</section>


<section class="left">
    <div class="page">
        <h2>Music</h2>

        <div class="col-group">
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper, purus sed aliquam volutpat, ipsum felis faucibus purus, a aliquet dui eros eget leo. Cras id justo in justo rutrum ultrices in eget ligula. Suspendisse potenti. Suspendisse molestie neque quis laoreet pharetra. Aenean maximus fermentum fermentum. In hac habitasse platea dictumst. Donec dignissim eget leo id tincidunt.</p>
            </div>

            <div class="col-6">
                <iframe src="https://open.spotify.com/embed?uri=spotify:user:aguyawry:playlist:3bUJjfKzTqFwfu2uOxmhsm" width="100%" height="380" frameborder="0" allowtransparency="true"></iframe>
            </div>
        </div>
    </div>
</section>


<section class="left">
    <div class="page">
        <h2>Gear</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper, purus sed aliquam volutpat, ipsum felis faucibus purus, a aliquet dui eros eget leo. Cras id justo in justo rutrum ultrices in eget ligula. Suspendisse potenti. Suspendisse molestie neque quis laoreet pharetra. Aenean maximus fermentum fermentum. In hac habitasse platea dictumst. Donec dignissim eget leo id tincidunt.</p>

        <div class="col-group">
            <ul class="col-4">
                <li>PMC</li>
                <li>Mytek</li>
                <li>Bryston</li>

            </ul>
            <ul class="col-4">
                <li>Apple</li>
                <li>RME</li>
                <li>iZotope</li>
            </ul>
            <ul class="col-4">
                <li>Sonnox</li>
                <li>Manley</li>
                <li>Magix</li>
                <li>Avid</li>
            </ul>
        </div>

        <!-- <div style="clear:both;"></div> -->
    </div>
</section>


<section class="contact left">
    <div class="page">
        <h2>Contact</h2>
    
        <p><a class="an-contact-phone" href="tel:207.358.9146" title="Call elson mastering at 207.358.9146">207.358.9146</a></p>
        <p><script type="text/javascript">
            //<![CDATA[
            <!--
            var x="function f(x){var i,o=\"\",l=x.length;for(i=l-1;i>=0;i--) {try{o+=x.c" +
            "harAt(i);}catch(e){}}return o;}f(\")\\\"function f(x,y){var i,o=\\\"\\\\\\\""+
            "\\\\,l=x.length;for(i=0;i<l;i++){y%=127;o+=String.fromCharCode(x.charCodeAt" +
            "(i)^(y++));}return o;}f(\\\"\\\\<69.180+N\\\\\\\\026\\\\\\\\020\\\\\\\\n\\\\"+
            "\\\\020\\\\\\\\000\\\\\\\\n\\\\\\\\t@KV\\\\\\\\nL\\\\\\\\016\\\\\\\\002\\\\" +
            "\\\\016\\\\\\\\003\\\\\\\\002O/V\\\\\\\\024\\\\\\\\030Z\\\\\\\\033\\\\\\\\0" +
            "26\\\\\\\\024\\\\\\\\017\\\\\\\\035\\\\\\\\036\\\\\\\\n-dobmiZ%(axnj0R-}p{\\"+
            "\\\\\\177`z,dll~rs]{sSNLNEVRBZ@DL\\\\\\\\002NABl\\\\\\\\023\\\\\\\\022G]AZR" +
            "\\\\\\\\005e\\\\\\\\030^Q\\\\\\\\\\\\\\\\WS`$.0++f*):>.>$ (\\\\\\\\014sl   " +
            "2>7\\\\\\\\031?7/202\\\\\\\\001\\\\\\\\022\\\\\\\\026\\\\\\\\006\\\\\\\\026" +
            "\\\\\\\\014\\\\\\\\010\\\\\\\\000F\\\\\\\\n\\\\\\\\005\\\\\\\\006PB\\\\\\\\" +
            "017QRXICO\\\"\\\\,88)\\\"(f};)lo,0(rtsbus.o nruter};)i(tArahc.x=+o{)--i;0=>" +
            "i;1-l=i(rof}}{)e(hctac};l=+l;x=+x{yrt{)84=!)31/l(tAedoCrahc.x(elihw;lo=l,ht" +
            "gnel.x=lo,\\\"\\\"=o,i rav{)x(f noitcnuf\")"                                 ;
            while(x=eval(x));
            //-->
            //]]>
            </script>
        </p>
</section>

<?php
    include "bottom.php";
?> 