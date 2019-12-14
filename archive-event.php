<?php
/*
  Template Name: Event Archive
*/
?>

<?php get_header(); ?>

  <div id="event-archive-container" class="internal-container">
      <h1>EVENTS</h1>
      <div class="divider black"></div>

      <p class="intro-copy">Come out to support En Las Tablas Performing Arts and see our students in action.</p>

      <ul id="events-list">
        <?php $loop = new WP_Query( array( 'post_type' => 'event', 'posts_per_page' => -1 ) ); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li class="event">
              <div class="event-date">
                <h2><?php the_field('event_date'); ?></h2>
              </div>
              <div class="event-info">
                <h2><?php the_title(); ?></h2>
                <h3><?php the_field('event_start_time'); ?> - <?php the_field('event_end_time'); ?></h3>
              </div>
              <div class="event-link">
                <a href="<?php echo get_permalink(); ?>" class="btn btn-yellow event-btn">View Event</a>
              </div>
            </li>
        <?php endwhile; ?>
        <?php else: ?>
          <li class="no-events">
            <h2>No events currently scheduled</h2>
          </li>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </ul>
  </div>

<?php get_footer(); ?>
