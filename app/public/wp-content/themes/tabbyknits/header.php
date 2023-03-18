<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="wrapper">
            <header id="header" role="banner">
                <div class="top-bar">
                    <nav id="social-menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'social-menu',
                                'container'         => false,
                                'walker'            => new Aria_Walker_Nav_Menu(),
                                'items_wrap'        => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
                                ));
                        ?>
                    </nav>
                </div>
                <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
                    <div id="search"><?php get_search_form(); ?></div>
                </nav>
            </header>
            <main id="content" role="main">