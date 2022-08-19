<? get_header();
/* Template Name: About Page */
?>
 
  <div id="wrapper">
    <main>

    <?php if(have_posts()): ?>
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
    <?php dynamic_sidebar( 'sidebar-about' ); ?>
    </aside><!-- end #secondary -->

  </div>
  <!-- end wrapper -->

  <?php get_footer(); ?>