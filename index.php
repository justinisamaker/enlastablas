<?php get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="blog-post">
      <h3><?php the_title(); ?></h3>
      <h4>Posted on <?php the_date(); ?></h4>
      <p><?php the_content(); ?></p>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>
