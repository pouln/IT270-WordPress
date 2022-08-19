<? get_header();
/* Template Name: Fiction Page */
?>

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
    <?php dynamic_sidebar( 'sidebar-fiction' ); ?>
    
    </aside><!-- end #secondary -->

  </div>
  <!-- end wrapper -->

  

  <?php get_footer(); ?>