<?php
    
    $url = $_SERVER['REQUEST_URI'];
    $title = "Real Estate Developers | Elm Street Communities";
    $desc = "Since 1977, Elm Street Communites is one of the region's largest real estate developers in the area. Over 300 communities and 52,000 homes established in Maryland, Virginia, and DC.";
    if($url == "/communities/") {
        $title = "Community Builders | Elm Street Communities";
        $desc = "The award-winning Elm Street Communities team is experienced in all aspects of real estate development. From Baltimore MD, to Washington DC, and Virginia. Elm Street Communities is one of the region's most trusted community builders.";
    };
    if($url == "/about-us/") {
        $title = "About Us | Elm Street Communities";
        $desc = "Over the last four decades, Elm Street Communities has been developing distinguished communities and providing value for generations of homeowners. Discover why Elm Street Communities has grown to become one of the largest privately-owned developers.";
    };
?>