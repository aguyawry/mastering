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
                echo "    <h4>" . $data->title . "</h4>";
                echo "    <h5>" . $data->artist . "</h5>";
                echo "</div>";
            }
        ?></div></section><hr><section><p>Welcome to elson mastering!</p><p>I'm Scott Elson, an audio engineer providing high quality mastering services to recording artists, music producers and record labels worldwide. From Death Punk to Sea Shanties and everything in between, clients from a wide range of musical generes trust my experienced ears to put the finishing touches on their records.</p> <a id="listen-on-spotify" class="hide-text an-home-spotify" href="https://open.spotify.com/user/aguyawry/playlist/3bUJjfKzTqFwfu2uOxmhsm" rel="external" title="Listen to the elson mastering Playlist on Spotify.">Listen to the elson mastering Playlist on Spotify.</a><p>Every project is unique, deserves a fresh perspective and should be approached as if it's a future classic. There are no stock settings that work across the board, so I use a variety of reliable techniques to get great sounds. The results enhance musicality by preserving the dynamic, adding clarity and ensuring the final product translates well to any device and format.</p><p>I use a thoughtful mix of analog and digital equipment depending on what feels right for the music. Some tools provide transparency while others add color, but they are all very flexible and configurable.</p><p>I am always honored to be a part of an artist's creative vision and truly enjoy helping make that vision a tangible reality. Please get in touch if you are interested in working together on your next project.</p></section> <?php
    include "bottom.php";
?>