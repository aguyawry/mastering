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
        <p>elson mastering is an audio production studio specializing in audio mastering, restoration and preservation. While located in Maine, we collaborate with artists, producers, engineers and labels around the world and from a wide range of musical genres. Our goal is to make each client’s artistic vision a sonic reality by bringing out the absolute best in sound quality.</p>
    </div>
</section>


<section class="left testimonial">
    <div class="page">
        <div class="">
            <blockquote cite="https://www.kenhutton.com/">
                <p><span class="openq">&ldquo;</span>Scott is my first call for mastering. For all his technical mastery, he never loses sight of the music. Communicating across all aspects of the project is always easy and enjoyable. I can flow seamlessly with him between technical and musical issues, and never have to explain what I mean.</p>
                </p>He adopts the project as a contributor, with an authentic interest in helping me fulfill and exceed the expectation of my artists and clients. Scott is a powerful ally and has become a friend that I count on to check my work and to make it better.<span class="closeq">&rdquo;</span></p>
            </blockquote>

            <div class="attribution">
                <p class="author name">Ken Hutton</p>
                <p class="author title">Engineer, Producer</p>
                <p class="author location">Raesfeld, Germany</p>
            </div>
        </div>
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
                <!-- <iframe src="https://open.spotify.com/embed?uri=spotify:user:aguyawry:playlist:3bUJjfKzTqFwfu2uOxmhsm" width="100%" height="380" frameborder="0" allowtransparency="true"></iframe> -->
            </div>
        </div>
    </div>
</section>


<section class="left">
    <div class="page">
        <h2>Gear</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper, purus sed aliquam volutpat, ipsum felis faucibus purus, a aliquet dui eros eget leo. Cras id justo in justo rutrum ultrices in eget ligula. Suspendisse potenti. Suspendisse molestie neque quis laoreet pharetra. Aenean maximus fermentum fermentum. In hac habitasse platea dictumst. Donec dignissim eget leo id tincidunt.</p>

        <div class="col-group">
            <ul class="col-mb-6">
                <li>PMC</li>
                <li>Mytek</li>
                <li>Bryston</li>
                <li>Magix</li>
                <li>Apple</li>
                <li>Waves</li>
            </ul>
            <ul class="col-mb-6">
                <li>Manley</li>
                <li>Sonnox</li>
                <li>Sennheiser</li>
                <li>RME</li>
                <li>iZotope</li>
                <li>Avid</li>
            </ul>
        </div>
    </div>
</section>


<section class="contact left">
    <div class="page">
        <h2>Contact</h2>

        <div class="col=group">
            <div class="col-6">
                <p>Please get in touch well before you are ready for mastering to ensure we can meet your timeline. We are a big supporter of the independent music community and offer competitive rates for independent projects.</p>

                <p>Giving back to the community is also important to us and we enjoy being able to offer volunteer services when possible. Please call, email or fill out our quote form and we’ll find a way to work within your budget.</p>

                <p>Join us on Facebook and other social media channels for regular updates from the studio.</p>
            </div>

            <div class="col-5 col-offset-1">
            
    
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
            </div>
        </div>
</section>

<?php
    include "bottom.php";
?> 