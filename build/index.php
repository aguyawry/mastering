<?php
    $page = "home";
    $title = "mastering studio | elson mastering";
    $description = "elson mastering provides high-quality audio mastering services to artists, labels and music producers throughout the world.";
    $keywords = "scott elson, mastering, audio mastering, music, audio encoding, music production, audio restoration, transfers, archives, forensic audio, maine";
    include "top.php";
?><section><div id="carousel"> <?php
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
        ?></div></section><hr><section><ul class="services"><li>mastering</li><li>restoration</li><li>preservation</li></ul></section><hr><section class="contact"><p><a class="an-contact-phone" href="tel:207.358.9146" title="Call elson mastering at 207.358.9146">207.358.9146</a></p><p><script type="text/javascript">
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
            </script></p></section> <?php
    include "bottom.php";
?>