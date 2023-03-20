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
        <a class="skip-main" href="#content">Skip to main content</a>
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
                <div id="search"><?php get_search_form(); ?></div>
            </div>
            <div class="main-nav-wrapper">
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>" class="brand-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                            $custom_logo_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true);
                        ?>
                        <img src="<?php echo esc_url( $custom_logo_url ); ?>" alt="<?php echo $custom_logo_alt; ?>" />
                        <span class="sr-only">Home</span>
                    </a>
                </div>
                <!-- Menu -->
                <div class="menu-container">
                    <input class="side-menu" type="checkbox" id="side-menu"/>
                    <div class="hamburger">
                        <label class="hamburger-icon" for="side-menu">
                            <span class="hamburger-line"></span>
                        </label>
                    </div>
                    <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'main-menu',
                            'container'         => false,
                            'walker'            => new Aria_Walker_Nav_Menu(),
                            'items_wrap'        => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
                        ));
                        ?>
                        <div id="search"><?php get_search_form(); ?></div>
                    </nav>
                </div>
            </div>
        </header>
        <main id="content" role="main">