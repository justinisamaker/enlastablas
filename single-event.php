<?php
/*
  Template Name: Single Event
*/
?>

<?php get_header(); ?>

  <main id="single-event-container" class="internal-container">
    <div id="event-details">
      <div id="event-info">
        <h1><?php the_title(); ?></h1>
        <h4><?php the_field('event_date'); ?><span class="info-divider"></span><?php the_field('event_start_time'); ?> - <?php the_field('event_end_time'); ?></h4>
        <h4><?php the_field('event_location');?></h4>

        <?php if( get_field('event_description') ): ?>
          <p class="event-description"><?php the_field('event_description'); ?></p>
        <?php else: ?>
          <p class="event-description">No event description</p>
        <?php endif; ?>

        <?php if( have_rows('event_ticket_repeater') ): ?>
          <section id="event-tickets">
            <h4>Tickets</h4>
            <ul>
              <?php  while ( have_rows('event_ticket_repeater') ) : the_row(); ?>
                <li><?php the_sub_field("ticket_type"); ?> - <?php the_sub_field("ticket_price"); ?></li>
              <?php endwhile; ?>
            </ul>
          </section>
        <?php endif; ?>
      </div>

      <?php if(get_field('event_link') || get_field('event_location')) : ?>
        <section id="register-box">
          <?php if( get_field('event_link') ): ?>
            <a href="<?php the_field('event_link'); ?>" target="_blank" class="btn btn-yellow">Get a ticket</a>
          <?php endif; ?>
          <?php if( get_field('event_location') ): ?>
            <a href="https://www.google.com/maps/place/<?php the_field('event_location'); ?>" target="_blank" class="btn btn-yellow">Get directions</a>
          <?php endif; ?>
        </section>
      <?php endif; ?>
    </div>

    <div id="other-events">
      <h2>Other events</h2>
      <ul id="other-events-list">
        <?php $loop = new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => 3 ) ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <li class="other-events">
              <div class="event-archive-date no-space">
                <h3><?php the_title(); ?></h3>
                <h4><?php the_field('event_date'); ?></h4>
                <h4><?php the_field('event_start_time'); ?> - <?php the_field('event_end_time'); ?></h4>
                <a href="<?php echo get_permalink(); ?>" class="btn btn-yellow">View</a>
              </div>
            </li>
        <?php endwhile; wp_reset_query(); ?>
      </ul>
    </div>
  </main>

<?php get_footer(); ?>
