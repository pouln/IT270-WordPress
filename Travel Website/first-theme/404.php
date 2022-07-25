<?php get_header();?>

<!-- the index.php is the assigned to the blog page!! blog container
for all of our posts -->

<div id="wrapper">
<!-- add wrong page image -->  
<main>
    <h2>This is somewhat embarrassing, isn't it?</h2>
    <p>It looks like nothing was found in this location! Maybe try a different search?</p>
    <?php get_search_form(); ?>
    <h3>Or, please feel free to browse our pages</h3>
    <?php wp_list_pages() ;?>
</main>
<aside>
    This is my 404.php page!
</aside>

</div>
<!-- end wrapper -->

<?php get_footer();?>