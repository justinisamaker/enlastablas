<?php
  function adobo_add_google_fonts(){
    wp_enqueue_style('adobo-google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700', false);
  }

  add_action('wp_enqueue_scripts', 'adobo_add_google_fonts');
?>
