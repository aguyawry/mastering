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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'> -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'> -->

        <!-- build:css css/style.css -->
        <link rel="stylesheet" href="css/elson_mastering.css">
        <!-- endbuild -->

        <!-- build:js_top js/top.js -->
        <script src="js/app/analytics.js"></script>
        <!-- endbuild -->
    </head>


    <body>
        <a href="#" class="toggle-button">&vellip;</a>

        <div canvas="container">
            <div id="container1">

                <header>
                    <img src="img/brand/elson_mastering_300.jpg" alt="elson mastering">
                    <h1>elson mastering</h1>
                    <p class="tagline">art in audio</p>
                </header>