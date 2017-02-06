<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- order of meta and title tags here matters! -->

        <!-- charset declaration should come in the first 1024 bytes and before <title> -->
        <meta charset="utf-8">

        <!-- force the latest IE rendering -->
        <!-- ideally this should be done with response headers. if not, this <meta> needs to happen early -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- standard stuff -->
        <title><?php echo $title ?></title>
        <meta name="description" content="<?php echo $description ?>">
        <meta name="keywords" content="<?php echo $keywords ?>">

        <!-- specify viewport. use only for responsive sites -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- cleartype for Win/IE devices -->
        <meta http-equiv="cleartype" content="on">

        <!-- favicon likely detected by default if in the root. only needed if changing the location or file type -->
        <link rel="shortcut icon" href="img/touch/apple-touch-icon.png">

        <!-- various platform specific touch icons as desired/needed. TODO: update apple icon & use only 1 -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

        <!-- build:css css/style.css -->
        <link rel="stylesheet" href="css/elson_mastering.css">
        <!-- endbuild -->

        <!-- build:js_top js/top.js -->
        <script src="js/app/analytics.js"></script>
        <!-- endbuild -->
    </head>


    <body>

    <footer>
                    <ul id="social">
                        <li>
                            <a id="grammy" class="hide-text an-ftr-grammy" href="https://www.grammypro.com/users/scott-elson" rel="external" title="Connect with Scott Elson at The Recording Academy.">Connect with Scott Elson at The Recording Academy.</a>
                        </li>
                        <li>
                            <a id="spotify" class="hide-text an-ftr-spotify" href="https://open.spotify.com/user/aguyawry/playlist/3bUJjfKzTqFwfu2uOxmhsm" rel="external" title="elson mastering Playlist on Spotify">elson mastering Playlist on Spotify</a>
                        </li>

                        <!--
                        <li>
                            <a id="linkedin" class="hide-text an-ftr-linkedin" href="https://www.linkedin.com/in/scottelson" rel="external" title="Connect with Scott Elson on LinkedIn.">Connect with Scott Elson on LinkedIn.</a>
                        </li>
                        <li>
                            <a id="pinterest" class="hide-text an-ftr-pinterest" href="https://www.pinterest.com/aguyawry/scott-elsons-partial-discography/" rel="external" title="Scott Elson partial discography on Pinterest.">Scott Elson partial discography on Pinterest.</a>
                        </li>
                        <li>
                            <a id="instagram" class="hide-text an-ftr-instagram" href="https://www.instagram.com/" rel="external" title="follow scott elson on Instagram">follow scott elson on Instagram</a>
                        </li>
                        <li>
                            <a id="twitter" class="hide-text an-ftr-twitter" href="https://www.pinterest.com/aguyawry/scott-elsons-partial-discography/" rel="external" title="follow scott elson on Twitter">follow scott elson on Twitter</a>
                        </li>
                        -->
                    </ul>

                    <nav>
                        <a id="up" href="#">&#8639;</a>
                        <a id="down" href="#">&#8642;</a>
                    </nav>

                    <!-- <p><span>&copy; <?php date_default_timezone_set('UTC'); echo date("Y"); ?> elson mastering</span> // <span>all rights reserved</span></p> -->

                </footer>
<!--         <nav>
            <ul>
                <li><a href="index.php" class="an-nav-home<? if ($page === "home") { ?> active<? } ?>">home</a></li>
                <li><a href="services.php" class="an-nav-services<? if ($page === "services") { ?> active<? } ?>">services</a></li>
                <li><a href="about.php" class="an-nav-about<? if ($page === "about") { ?> active<? } ?>">about</a></li>
                <li><a href="contact.php" class="an-nav-contact<? if ($page === "contact") { ?> active<? } ?>">contact</a></li>
            </ul>
        </nav> -->

        <div id="container">
            <div id="content">

                <header>
                    <img src="img/brand/elson_mastering_300.jpg" alt="elson mastering">
                    <h1>elson mastering</h1>
                    <h2>art in audio</h2>
                </header>
                
                