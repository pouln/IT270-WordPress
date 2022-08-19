<?php get_header();?>

  <div id="wrapper">
    <main>
      <!-- our qustion of the day is,
      if we have any posts or pages, show them!!! -->
      <?php if(have_posts()): ?>
      <!-- we need to show the post in a while loop in the world of PHP -->
      <?php while(have_posts()): the_post(); ?>
        <article class="post">
          <h2 class="title">
          
          <?php the_title(); ?>
          
          </h2>
          <div class="meta">
          <span>
            <b>Posted By: </b><?php the_author();?>
          </span>
          <span>
            <b>Posted On: </b><?php the_time('F j, Y g:i a');?>
          </span> 

          </div>
          <!-- end meta -->

          <?php the_content(); ?>
          
          
        </article>
        
      <span class="next-previous">
        <?php (previous_post_link()) ? '%link' : ''; ?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : ''; ?>
      </span>

      <?php endwhile; ?>
      <?php else: ?>
      <h2>
        <?php echo wpautop('Sorry, no posts were found!'); ?>
      </h2>
      <?php endif; ?>
      <?php comments_template(); ?>
    </main>

    <?php get_sidebar() ; ?>

  </div>
  <!-- end wrapper -->

  <?php get_footer();?>