<?php
/*
  Template Name: Contact
*/
?>

<?php get_header(); ?>

<div id="our-story-container" class="internal-container">
  <h1>CONTACT US</h1>
  <div class="divider black"></div>

  <p class="intro-copy">If there’s anything we can help you with, please send us a message, give us a call, or drop in any time we’re open!</p>

  <div id="contact-info">
    <a href="mailto:enlastablas@sbcglobal.net" target="_blank" id="email-button" class="btn btn-yellow">Click here to<br/>e-mail En Las Tablas</a>

    <div id="map">
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:100%;"><div id="gmap_canvas" style="height:500px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(41.9168172,-87.7295436),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.9168172, -87.7295436)});infowindow = new google.maps.InfoWindow({content:"<b>En Las Tablas</b><br/>4111 W Armitage Ave<br/> Chicago" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
    </div>
  </div>
</div>

<?php get_footer(); ?>
