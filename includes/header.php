<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <meta name="author" content ="GKA Advertising | Amra Narmandakh" />
    <meta name="Owner" content="Elm Street Communities"/>
    <meta name="Copyright" content="Copyright &copy; Elm Street Communities"/>
    <meta name="keywords" content="" />
    <meta name="description" content ="<?php echo $desc; ?>" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/styles/css/mdb.min.css" rel="stylesheet">
    <link href="/styles/css/fullpage.min.css" rel="stylesheet">
    <!-- General CSS -->
    <link href="/styles/css/main.min.css" rel="stylesheet">
    <!-- General CSS -->
    <link href="/styles/css/vegas.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon.png" sizes="300x300">
    <!-- GoogleMaps-API + Key -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz3iefhrgh1LjDWCaKl3Z7HcGzwBkAaTU"></script>  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDORP2VTzr4aq-DWKRhu1EVqjZcePXn1tA"></script> 

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
    <!--[if lte IE 11]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <P id="VersionTab">Please update your browser to a new version so you can properly view this website. | <a href="https://browsehappy.com/?locale=en" target="_blank">Click here for help</a></p>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-44058351-1', 'elmstreetdev.com');
      ga('send', 'pageview');

    </script>
</head>

<body>
<h1 class="outline">Elm Street Communities</h1>
<header>
    <nav class="navbar fixed-top navbar-dark custom-navbar nav-closed">
        <h1 class="outline">Main Navigation</h1>
        <!-- Navbar brand -->
        <a class="navbar-brand z-index-9" href="/">
            <img src="/images/elm-street-logo.svg" alt="mdb logo">
        </a>

        <!-- Collapse button -->
        <button class="navbar-toggler first-button z-index-9" type="button" data-toggle="collapse" data-target="#main-menu"
            aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <div class="animated-icon1"><span></span><span></span><span></span></div>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse z-index-9" id="main-menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link fadeInUp animated" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fadeInUp animated" href="/communities">COMMUNITIES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fadeInUp animated" href="/about-us">ABOUT</a>
                    <ul class="drop-menu list-unstyled text-white">
                        <li><a href="/about-us#legacy" class="nav-link fadeInUp animated">THE ELM STREET LEGACY</a></li>
                        <li><a href="/about-us#elm-team" class="nav-link fadeInUp animated">THE ELM STREET TEAM</a></li>
                        <li><a href="/about-us#environment" class="nav-link fadeInUp animated">ENVIRONMENTAL FOCUS</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fadeInUp animated" href="/#office-locations">OFFICE LOCATIONS</a>
                    <ul class="drop-menu list-unstyled text-white">
                        <li><a href="/#contact-us" class="nav-link fadeInUp animated">CONTACT US</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>