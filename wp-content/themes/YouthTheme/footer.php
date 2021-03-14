<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Youth
 */

?>

<footer id="bottom-footer" class="container">
    <hr>

    <!--Menu main content area -->
    <div class="row justify-content-between">
        <div class="col-md-4">
            <?php wp_nav_menu( 
                              array( 
                              'theme_location' => 'footer_links',
                              'container' => 'div',
                              'container_id' => 'footer-links',
                              'menu_class' => 'navbar-nav align-items-baseline',
                              'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                              'walker'=> new WP_Bootstrap_Navwalker(),)
                );?>
        </div>

        <!-- Social networks links -->
        <div class="col-md-4">
            <h4 class="text-center mb-2"><?php _e( 'Seguinos en las redes sociales', 'youth' ); ?></h4>
			<?php wp_nav_menu( 
                              array( 
                              'theme_location' => 'footer_social',
                              'container' => 'div',
                              'container_id' => 'footer-links',
                              'menu_class' => 'navbar-nav align-items-baseline flex-row justify-content-around',
                              'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                              'walker'=> new WP_Bootstrap_Navwalker(),)
                );?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>