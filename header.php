<!doctype html>
  <html <?php language_attributes(); ?>>
  <head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  	<meta name="viewport" content="width=device-width, initial-scale=1" />
  	<link rel="profile" href="https://gmpg.org/xfn/11" />
  	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="adobo-container">
      <header id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo-container">
          <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/elt-logo.svg" alt="En las Tablas">
          <h1><?php bloginfo( 'name' ); ?></h1>
        </a>

        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=QQ6H937BJPATE" target="_blank" id="header-donate" class="btn btn-default">Donate</a>

        <nav id="primary-menu-container">
          <?php
            $defaults = array(
              'container' => false,
              'theme_location' => 'primary-menu',
              'menu_class' => 'primary-menu'
            );
            wp_nav_menu( $defaults );
          ?>
        </nav>
      </header>
