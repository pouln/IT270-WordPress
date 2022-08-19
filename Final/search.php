<?php get_header();?>

  <div id="wrapper">
    
    <main>

      <?php if(have_posts()): ?>

      <h2>Serach Results For: <?php echo get_search_query() ;?>
    </h2>
    
        <p>Our findings for
        <?php /* Search Count */
        $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles/pages'); wp_reset_query(); ?></p>


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
          </div>
          <!-- end thumbnail -->
          
          <?php endif ?>
          <?php the_excerpt(); ?>
          <span class="block">
            <a href="<?php the_permalink();?>">Read More about <?php the_title(); ?>
            </a>
          </span>
          
        </article>
      <?php endwhile; ?>
      <?php else: ?>
      <h2>
        No Content for:  
        <?php echo get_search_query() ;?>
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