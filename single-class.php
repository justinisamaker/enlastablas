<?php get_header(); ?>
  <main id="single-class-container" class="internal-container">
    <div id="class-info">
      <div id="class-description">
        <?php if( get_field('class_name') ): ?>
          <h1><?php the_field('class_name'); ?></h1>
        <?php else: ?>
          <h1><?php the_title(); ?></h1>
        <?php endif; ?>
        <?php if( get_field('class_description') ): ?>
          <p><?php the_field('class_description'); ?></p>
        <?php else: ?>
          <p>No class description</p>
        <?php endif; ?>

        <?php if( get_field('class_start_time') ){ ?>
          <p>
            <?php if( get_field('class_age') ){ ?>
              This class is for <span><?php the_field('class_age'); ?></span>.
            <?php } ?>

            <?php if( get_field('class_day') ){ ?>
              It takes place every <span><?php the_field('class_day'); ?>.</span>
              <?php if( get_field('class_start_date') ){ ?>
                from <span><?php the_field('class_start_date'); ?></span> to <span>
              <?php the_field('class_end_date'); ?>.</span><?php } ?>
            <?php } ?>

            <?php if( get_field('class_length') ){ ?>
              The class lasts <span><?php the_field('class_length'); ?></span> and runs from <span><?php the_field('class_start_time'); ?></span> to <span><?php the_field('class_end_time'); ?></span>.
            <?php } ?>

            <?php if( get_field('class_attire') ){ ?>
              Students will need <span><?php the_field('class_attire'); ?></span> to participate in the class.
            <?php } ?>
          </p>
        <?php } else { ?>
          <p>
            <?php if( get_field('class_age') ){ ?>
              This class is for <span><?php the_field('class_age'); ?></span>.
            <?php } ?>

            <?php if( get_field('class_start_date') ){ ?>
              The session runs from <span><?php the_field('class_start_date'); ?></span> to <span><?php the_field('class_end_date'); ?></span>.
            <?php } ?>

            <?php if( get_field('class_length') ){ ?>
              The class lasts <span><?php the_field('class_length'); ?></span>.
            <?php } ?>

            <?php if( get_field('class_other_time') ){ ?>
              <?php the_field('class_other_time'); ?>
            <?php } else {  ?>
              Please contact us for details on exact dates and times.
            <?php } ?>

            <?php if( get_field('class_attire') ){ ?>
              Students will need <span><?php the_field('class_attire'); ?></span> to participate in the class.
            <?php } ?>
          </p>
        <?php } ?>
      </div> <!-- END CLASS DESCRIPTION -->
      <img src="<?php the_field('class_photo'); ?>" width="100%" alt="<?php the_title(); ?>" class="class-photo"/>
    </div>

    <div class="table-responsive">
      <table class="default-table class-sessions table">
        <thead>
          <th class="name-row" colspan="5">Current Schedule</th>
        </thead>
        <tbody>
          <tr class="labels">
            <td class="day">Day</td>
            <td class="time">Time</td>
            <td class="instructor">Instructor</td>
            <td class="register"></td>
          </tr>
          <?php $loop = new WP_Query( array( 'post_type' => 'class', 'posts_per_page' => -1 ) ); ?>
            <?php $currentClassName = get_field('class_name'); ?>
            <?php if($currentClassName != ''): ?>
              <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php if($currentClassName == get_field('class_name')): ?>
                  <tr class="default-single-listing">
                    <td class="session-day"><?php the_field('class_day');?></td>
                    <td class="session-time"><?php the_field('class_start_time');?> - <?php the_field('class_end_time');?></td>
                    <td class="session-instructor"><?php the_field('class_instructor'); ?></td>
                    <?php if(get_field('class_register_link')): ?>
                      <td class="register"><a href="<?php the_field('class_register_link'); ?>" target="_blank" class="btn btn-yellow">Register</a></td>
                    <?php else : ?>
                      <td class="register">Registration coming soon</td>
                    <?php endif; ?>
                  </tr>
                <?php endif; ?>
              <?php endwhile; wp_reset_query(); ?>
            <?php else: ?>
              <tr class="default-single-listing">
                <td class="session-season" colspan="5">No classes currently available</td>
              </tr>
            <?php endif; ?>
        </tbody>
      </table>
    </div> <!-- END CLASS TABLE -->
  </main>
<?php get_footer(); ?>
