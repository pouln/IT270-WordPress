<? get_header();
/* Template Name: Tours Page */
?>
  <!-- the index.php is assigned to the BLOG PAGE -->
  <!-- our question of the day is if we have any post or pages, show them!!  -->

  <div id="hero">
    <img src="<?php echo get_template_directory_uri() ; ?>/images/yellowstone-inner.jpg" alt="yellowstone">
  </div>
  <!-- end hero -->

  <div id="wrapper">
    <main>

    <?php if(have_posts()): ?>
            <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?> 
            <?php endif ?>
      <!-- we need to show the post in a while loop in the world of PHP -->
      <?php while(have_posts()): the_post(); ?>
        <? the_content(); ?>
      <?php endwhile; ?>
    <?php else: ?>
      <h2>
        <?php echo wpautop('Sorry, no posts were found!'); ?>
      </h2>
    <?php endif; ?>
    </main>
    
    <aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar-tours' ); ?>
    <?php dynamic_sidebar( 'sidebar-tours-specials' ); ?>
    </aside><!-- end #secondary -->

  </div>
  <!-- end wrapper -->

  <?php dynamic_sidebar( 'sidebar-buy' ); ?>

  <?php get_footer(); ?>