<?php
  // Google Fonts
  function adobo_add_google_fonts(){
    wp_enqueue_style('adobo-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700', false);
  }

  add_action('wp_enqueue_scripts', 'adobo_add_google_fonts');

  // Let WP handle the title tag
  add_theme_support( 'title-tag' );

  add_action( 'wp_enqueue_scripts', 'adobo_theme_styles' );

  // Register Menus
  function adobo_register_menus(){
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }

  add_action('init', 'adobo_register_menus');

  // Custom Styles
  function adobo_theme_styles(){
    wp_enqueue_style( 'normalize_css', get_template_directory_uri().'/css/components/normalize.css');

    wp_enqueue_style( 'header_css', get_template_directory_uri().'/css/components/header.css');

    wp_enqueue_style( 'footer_css', get_template_directory_uri().'/css/components/footer.css');

    if(is_front_page()){
      wp_enqueue_style( 'home_css',
        get_template_directory_uri().'/css/pages/home.css');
    }
  }


?>
