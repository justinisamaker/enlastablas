<?php
/*
  Template Name: Class Archive
*/
?>

<?php get_header(); ?>

  <div id="class-archive-container" class="internal-container">
    <h1>Our Classes</h1>
    <div class="divider black"></div>

    <p class="intro-copy">En Las Tablas Performing Arts classes provide a welcoming environment for students of all ages to grow as artists and performers. With a focus on health, environmental, and cultural awareness—we hope to help families pass on a little bit of themselves to their next generations.</p>

    <section id="class-listing-container">
      <?php $loop = new WP_Query( array( 'post_type' => 'class', 'posts_per_page' => -1 ) ); ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php if(get_field('class_coming_soon') === false): ?>
          <a href="<?php echo get_permalink(); ?>">
        <?php endif; ?>
        <div class="class-listing">
          <div class="inner">
            <?php if(get_field('class_coming_soon') === true): ?>
              <div class="corner-ribbon">Coming Soon</div>
            <?php endif; ?>

            <?php if(get_field('class_category') === 'Acting'){
              echo '<div class="class-category-icon acting-icon"></div>';
            } elseif (get_field('class_category') === 'Music'){
              echo '<div class="class-category-icon vocal-icon"></div>';
            } elseif (get_field('class_category') === 'Dance'){
              echo '<div class="class-category-icon dance-icon"></div>';
            } elseif (get_field('class_category') === 'Ballet'){
              echo '<div class="class-category-icon ballet-icon"></div>';
            } elseif (get_field('class_category') === 'Writing') {
              echo '<div class="class-category-icon writing-icon"></div>';
            } ?>

            <?php if( get_field('class_name') ): ?>
              <h2><?php the_field('class_name'); ?></h2>
            <?php else: ?>
              <h2><?php the_title(); ?></h2>
            <?php endif; ?>

            <ul class="class-info">
              <?php if( get_field('class_category') ): ?>
                <li class="class-category"><?php the_field('class_category'); ?></li>
              <?php endif; ?>

              <?php if(get_field('class_coming_soon') === true): ?>
                <li class="small">Coming Soon</li>
              <?php elseif( get_field('class_age_grouping') and get_field('class_day') ): ?>
                <li class="small"><?php the_field('class_day');?>s&#44;&nbsp;<?php the_field('class_age_grouping');?></li>
              <?php endif; ?>
            </ul>
          </div>
        </div> <!-- END SINGLE CLASS LISTING -->
      <?php if(get_field('class_coming_soon') === false): ?>
        </a>
      <?php endif; ?>

    <?php endwhile; wp_reset_query(); ?>
  </div>

<?php get_footer(); ?>
