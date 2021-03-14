<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Youth
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Header and navigation -->
    <header id="masthead">
        <!--Navigation -->
        <nav class="navbar navbar-light bg-light">
            <!-- Page branding -->
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php the_custom_logo();?>
                <img src="https://via.placeholder.com/30x30" class="d-inline-block align-top" alt="" loading="lazy">
                <?php _e( 'Red Interamericana de Jovenes', 'youth' )?>
            </a> <!-- Page branding -->

            <!-- page navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

				<?php wp_nav_menu( 
                              array( 
                              'theme_location' => 'primary_navbar',
                              'depth' => 2,
                              'container' => 'div',
                              'container_id' => 'navbarNav',
                              'container_class' => 'collapse navbar-collapse',
                              'menu_class' => 'navbar-nav align-items-baseline',
                              'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                              'walker'=> new WP_Bootstrap_Navwalker(),)
                );?>
            </nav>

        </nav>


    </header> <!-- #masthead -->