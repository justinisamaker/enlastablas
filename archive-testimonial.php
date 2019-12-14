<?php
/*
  Template Name: Testimonial Archive
*/
?>

<?php get_header(); ?>

  <div id="testimonial-archive-container" class="internal-container">
      <h1>TESTIMONIALS</h1>
      <div class="divider black"></div>

      <ul id="testimonials-list">
        <?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => -1 ) ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <?php if( get_field('testimonial_quote') ): ?>
                <h2><?php the_field('testimonial_quote'); ?></h2>
              <?php endif; ?>
              <?php if( get_field('testimonial_name') ): ?>
                <h5><?php the_field('testimonial_name'); ?>
                  <?php if(get_field('testimonial_title')): ?>
                    - <?php the_field('testimonial_title'); ?>
                  <?php endif; ?>
                </h5>
              <?php endif; ?>
            </li>
        <?php endwhile; wp_reset_query(); ?>
      </ul>
  </div>

<?php get_footer(); ?>
