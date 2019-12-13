<?php
/*
  Template Name: Home
*/
?>

<?php get_header(); ?>
  <div id="home-container">
    <section id="hero" class="hero-bg-<?php echo rand(1, 3); ?>">
      <h2>Where artistic expression builds community connection</h2>
    </section>

    <section id="homepage-box-links">
      <div class="box-link">
        <div class="box-link-title">
          <h3>Our story</h3>
          <div class="divider"></div>
        </div>
        <p>Providing affordable access to culturally diverse performing arts classes since 2006.</p>
        <a href="<?php bloginfo('url'); ?>/our-story" class="btn btn-white">Learn more</a>
      </div>

      <div class="box-link">
        <div class="box-link-title">
          <h3>Support<br/>En Las Tablas</h3>
          <div class="divider"></div>
        </div>
        <p>Help us meet our goals by donating money, goods, or time to the organization.</p>
        <a href="<?php bloginfo('url'); ?>/support-us" class="btn btn-white">Learn more</a>
      </div>
    </section>

    <section id="testimonials">
      <h3>WHAT THE PEOPLE SAY</h3>
      <div class="divider black"></div>
      <?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'rand', 'posts_per_page' => 1 ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php if( get_field('testimonial_quote') ): ?>
            <h4><?php the_field('testimonial_quote'); ?></h4>
          <?php endif; ?>

          <h6><?php the_title(); ?>
            <?php if(get_field('testifier_title')): ?>
              &ndash; <?php the_field('testifier_title'); ?>
            <?php endif; ?>
          </h6>
      <?php endwhile; wp_reset_query(); ?>
      <a href="<?php bloginfo('url'); ?>/testimonials" class="btn btn-black">See More</a>
    </section>

    <section id="events-social">
      <div id="home-events" class="event-social-section">
        <h3>UPCOMING EVENTS</h3>
        <div class="divider"></div>
        <ul>
          <?php $loop = new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => 2 ) ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <li class="event">
              <h5><?php the_title(); ?></h5>
              <?php if(get_field('event_date')): ?>
                <h6><?php the_field('event_date'); ?></h6>
              <?php endif; ?>
              <?php if(get_field('event_description')): ?>
                <p>
                  <?php
                    $text = get_field('event_description');
                    $trimmed = wp_trim_words( $text, $num_words = 25, $more = '...' );
                    echo $trimmed;
                  ?>
                </p>
              <?php endif; ?>
              <a href="<?php echo get_permalink(); ?>" class="btn btn-yellow">View Event</a>
            </li>
          <?php endwhile; wp_reset_query(); ?>
        </ul>
      </div>
    </section>

    <section id="home-social" class="events-social-section">
      <h3>FACEBOOK</h3>
      <div class="divider"></div>
      <div class="facebook-container">
        <?php echo do_shortcode('[custom-facebook-feed]'); ?>
      </div>
    </section>
  </div>
<?php get_footer(); ?>
