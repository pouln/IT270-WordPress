<?php get_header();?>

<div id="wrapper">
<!-- add wrong page image -->  
<main>
    <h2>This is somewhat embarrassing, isn't it?</h2>
    <p>It looks like nothing was found in this location! Maybe try a different search?</p>
    <?php get_search_form(); ?>
    <h3>Or, please feel free to browse our pages</h3>
    <?php wp_list_pages() ;?>
</main>
<?php get_sidebar() ; ?>

</div>
<!-- end wrapper -->

<?php get_footer();?>