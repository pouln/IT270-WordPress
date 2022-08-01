<?php get_header();?>

<!-- the index.php is the assigned to the blog page!! blog container
for all of our posts -->

  <div id="hero">
    <img src="<?php echo get_template_directory_uri() ; ?>/images/yellowstone-inner.jpg" alt="yellowstone">
  </div>
  <!-- end hero -->
  <div id="wrapper">
    <main>
      <!-- our qustion of the day is,
      if we have any posts or pages, show them!!! -->
      <?php if(have_posts()): ?>
      <!-- we need to show the post in a while loop in the world of PHP -->
      <?php while(have_posts()): the_post(); ?>
        <article class="post">
          <h2 class="title">
          <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a>
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
          <div class="thumbnail">
          <?php if(has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?> 
            </a>
            <?php endif ?>
          </div>
          <!-- end thumbnail -->
          
          
          <?php the_excerpt(); ?>
          <span class="block">
            <a href="<?php the_permalink();?>">Read More about <?php the_title(); ?>
            </a>
          </span>
          
        </article>
      <?php endwhile; ?>
      <?php else: ?>
      <h2>
        Search Results:
      </h2>
      <p>
        Sorry, we could not find anything regarding you search terms.
          Would you like to seach again, using different keywords?
      </p>
      <?php get_search_form() ; ?>
      <?php endif; ?>
    </main>
    
    <?php get_sidebar() ; ?>
  
  </div>
  <!-- end wrapper -->

  <?php get_footer();?>