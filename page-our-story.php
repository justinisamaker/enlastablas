<?php
/*
  Template Name: Our Story
*/
?>

<?php get_header(); ?>

  <div id="our-story-container" class="internal-container">
    <h1><?php the_title(); ?></h1>
    <div class="divider black"></div>

    <section id="about-us">
      <h2 class="section-title">About Us</h2>
      <p><?php the_field('our_story_intro'); ?></p>
      <ul class="directors">
        <li class="title">Our Board of Directors</li>
        <?php while(has_sub_field('board_of_directors_repeater')):?>
          <li><?php the_sub_field('director_name'); ?> - <?php the_sub_field('director_title'); ?></li>
        <?php endwhile; ?>
      </ul>
    </section>

    <figure id="about-us-divider" class="photo-divider"></figure>

    <section id="our-mission">
      <h2 class="section-title">Our mission and philosophy</h2>
      <div class="divider black"></div>
      <p><?php the_field('mission_and_philosophy'); ?></p>
    </section>

    <figure id="our-mission-divider" class="photo-divider"></figure>

    <section id="serving-community">
      <h2 class="section-title">Serving the Community</h2>
      <div class="divider black"></div>
      <p><?php the_field('serving_the_community'); ?></p>
      <div class="quote">
        <h3>“<?php the_field('our_story_testimonial_quote'); ?>”</h3>
        <h6><?php the_field('our_story_testimonial_quote_source'); ?></h6>
      </div>
      <a href="/testimonials" id="quote-button" class="btn">See what people say</a>
    </section>

    <section id="learn-more">
      <div id="learn-instructors" class="learn-item">
        <div class="photo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/our-instructors.jpg" width="100%" />
        </div>
        <h3>The instructors</h3>
        <div class="divider black"></div>
        <p><?php the_field('our_story_our_instructors'); ?></p>
      </div>

      <div class="learn-item">
        <div class="photo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/our-space.jpg" width="100%" />
        </div>
        <h3>Our Space</h3>
        <div class="divider black"></div>
        <p><?php the_field('our_story_our_space'); ?></p>
        <a href="/contact-us" class="btn btn-yellow">Rent the Space</a>
      </div>

      <div class="learn-item">
        <div class="photo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/our-classes.jpg" width="100%" />
        </div>
        <h3>Our Classes</h3>
        <div class="divider black"></div>
        <p><?php the_field('our_story_our_classes'); ?></p>
        <a href="/classes" class="btn btn-yellow">Find a class</a>
      </div>
    </section> <!-- END LEARN MORE -->
  </div>

<?php get_footer(); ?>
