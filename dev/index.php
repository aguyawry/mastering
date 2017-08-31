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
        <div class="col-group">
            <div class="col-6">
                <p>elson mastering is an audio production studio specializing in audio mastering, restoration and preservation.
                <p>While located in Maine, we collaborate with artists, producers, engineers and labels around the world, and from a wide range of musical genres.</p>
                <p>Our goal is to make each client’s artistic vision a sonic reality by bringing out the absolute best in sound quality.</p>
            </div>

            <div class="col-6">
                <iframe src="https://open.spotify.com/embed?uri=spotify:user:aguyawry:playlist:3bUJjfKzTqFwfu2uOxmhsm" width="100%" height="380" frameborder="0" allowtransparency="true"></iframe>
            </div>
        </div>
    </div>
</section>


<!-- <section class="left testimonial">
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
</section> -->


<!-- <section class="left">
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
</section> -->


<section class="left">
    <div class="page">
        <h2>Gear</h2>
        <div class="col-group">
            <div class="col-6">
                <p>Everything in the signal chain matters.</p>
                <p>Some tools add color while others are transparent, so we choose gear wisely - only using what’s needed and appropriate.</p>
                <p>We have processing available in both the analog and digital domains depending on what feels right for the music, and quality conversion to go between them.</p>
            </div>

            <div class="col-group">
                <div class="col-5 col-mb-offset-1">
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
        </div>
    </div>
</section>


<section class="contact left">
    <div class="page">
        <h2>Contact</h2>

        <div class="col-group">
            <div class="col-6">
                <p>Please get in touch well before you are ready for mastering to ensure we can meet your timeline. Please call, email or fill out our <a href="https://docs.google.com/forms/d/e/1FAIpQLScSzOwOeRaMF7oyx1yHC2eohTOBkC4MroBaiv_wCR0baFPTew/viewform" target="_blank">inquiry form</a> to start the booking process.</p>
                <p>As a supporter of the independent music community, we offer competitive rates for independent projects. We'll do our best to work with your budget.</p>
                <p>Giving back to the community is important to us and we enjoy offering volunteer services when possible.</p>
                <p>Join us on Facebook and other social media channels for regular updates from the studio. Send us your latest news and we'll pass it on.</p>
            </div>

            <div class="col-5 col-offset-1">
                <p>
                    <a class="btn" href="https://docs.google.com/forms/d/e/1FAIpQLScSzOwOeRaMF7oyx1yHC2eohTOBkC4MroBaiv_wCR0baFPTew/viewform" target="_blank">project inquiries</a>
                </p>

                <div class="hcard">
                    <p>
                        <a class="p-tel" href="tel:2073589146" title="Call elson mastering at 207.358.9146">207.358.9146</a>
                        <script type="text/javascript">
                        //<![CDATA[
                        <!--
                        var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
                        "=55){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
                        ".substr(0,ol);}f(\")911,\\\"QYSND[500\\\\L^410\\\\710\\\\<p:22(<,$78:<!=571" +
                        "0\\\\!$(>>:ve230\\\\(+ l&.VLXHH[TVXEYQs]XTZZ^620\\\\D^EAFK700\\\\x630\\\\DD" +
                        "Rw>?@wsxur;`6O/bcnbn,j6+ ij`pjpv.n\\\\320\\\\130\\\\620\\\\710\\\\230\\\\72" +
                        "0\\\\320\\\\\\\"(f};o nruter};))++y(^)i(tAedoCrahc.x(edoCrahCmorf.gnirtS=+o" +
                        ";721=%y{)++i;l<i;0=i(rof;htgnel.x=l,\\\"\\\"=o,i rav{)y,x(f noitcnuf\")"     ;
                        while(x=eval(x));
                        //-->
                        //]]>
                        </script>
                    </p>
                </div>
                


            
            </div>
            
        </div>
    </div>
</section>

<?php
    include "bottom.php";
?> 