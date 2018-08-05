<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- build:js_top js/top.js -->
        <script src="js/app/analytics.js"></script>
        <!-- endbuild -->

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
        <meta name="robots" content="<?php echo $robots ?>">

        <!-- specify viewport. use only for responsive sites -->
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">


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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans: 400,300' rel='stylesheet' type='text/css'>

        <!-- build:css css/style.css -->
        <link rel="stylesheet" href="css/elson_mastering.css">
        <!-- endbuild -->
    </head>


    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3PRKT"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <header>
            <div class="container">
                <div class="col-group">
                    <div class="col-mb-12">
                        <a id="brand" href="/">
                            <img src="img/brand/elson_mastering_300.jpg" alt="elson mastering">

                            <div id="title">    
                                <h1>elson mastering</h1>
                                <p class="tagline">art in audio</p>
                            </div>
                        </a>

                        <ul>
                            <li><a href="#services">services</a></li>
                            <li><a href="#studio">studio</a></li>
                            <li><a href="#scott">scott</a></li>
                            <li><a href="#contact">contact</a></li>
                        </ul>

                        <a href="#" class="toggle-button">&vellip;</a>
                    </div>
                </div>
            </div>
        </header>
