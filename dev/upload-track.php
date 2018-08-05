<?php
    $page = "upload";
    $title = "upload your music | elson mastering";
    $description = "Upload your music to elson mastering";
    $keywords = "scott elson, upload music for mastering, music mastering, audio mastering, mastered for iTunes, remote mastering, internet mastering, music production, audio restoration, transfers, archives, maine";
    $robots = "noindex, nofollow, noarchive, nosnippet, noodp";
    include "top.php";
?>

<section id="intro" class="dark">
    <div class="container">

        <div class="col-group">        
            <div class="col-mb-12 col-6 col-offset-3">
                <h2>Ready to send us<br>your music?</h2>
                <h2>We can't wait to<br>hear it!</h2>
            </div>
        </div>
                
        <div class="col-group">        
            <div class="col-mb-12 col-6 col-offset-3">
                <p>Uploading your track is quick and secure. Clicking the button below will take you to our upload page at DropBox.<p>
                
                <p>From there, all you need to do is:</p>

                <ol>
                    <li>Choose a file to upload.</li>
                    <li>Enter your name and email address in the form fields.</li>
                    <li>Click the Upload button.</li>
                </ol>

                <p>Please send your track at the same sample rate and bit depth of your mix. Please do not sample rate convert your file or reduce the bit depth.</p>
                <p>Ideally WAV or AIFF files at a 24 bit resolution are best, but we can most likely work with whatever you send!</p>
            </div>
        </div>

        <div class="col-mb-12">
            <div class="btn-row center">
                <a class="btn an-btn-upload" href="https://www.dropbox.com/request/2uWQA59djx11nEK5yTZh" rel="external">Upload A Track</a>
            </div>
        </div>

    </div>
</section>


<section class="dark">
    <div class="container">

        <div class="col-group">        
            <div class="col-mb-12 col-6 col-offset-3">
                <h3>What happens next?</h3>
                <p>We'll get notified of your upload, will download your music and give it a listen. If we have any questions, we'll reach out to discuss your goals, mix concerns or any sonic references you may have in mind.<p>
                
                <p>Within 2 to 3 business days, you'll recieve an email containing a link to download a sample of your mastered track. If you like what you hear, you'll have the option to purchase and download the entire master.</p>

                <p>If you have any questions or additional mix notes to send, just email <?php include "email.php";?>.
            </div>
        </div>

    </div>
</section>


<?php
    include "bottom.php";
?> 