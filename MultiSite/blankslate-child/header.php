<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
      <?php wp_body_open(); ?>

    <header id="header" role="banner">
        <div id="branding">
            <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                
                <!-- Adding logo with link to my home page -->
                <a href="<?php echo get_home_url() ; ?>">
                <img src="<?php echo get_template_directory_uri() ; ?>/images/logo.png" alt="logo" id="logo">
                </a>
                
            </div>

        </div>
        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
        </nav>
    </header>
