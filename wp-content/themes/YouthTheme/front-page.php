<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Youth
 */

get_header();
?>

<main id="primary" role="main">
    <!-- Carrousel -->
    <div id="homepageCarousel" class="carousel carousel-fade mb-2" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homepageCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homepageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homepageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#homepageCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1820x720" class="d-block w-100" alt="imagen1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Titulo 1</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1820x720" class="d-block w-100" alt="imagen2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Titulo 2</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1820x720" class="d-block w-100" alt="imagen3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Titulo 3</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1820x720" class="d-block w-100" alt="imagen4">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Titulo 4</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homepageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homepageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- END OF BANNER -->

    <!-- POST LANDING -->
    <section id="primary-posts" class="container">
        <header class="text-center">
            <h2>
                <?php _e( 'Qué está sucediendo', 'youth' ); ?>
            </h2>
            <p class="lead text-muted">
                <?php _e( 'Todas las noticias recientes de la región.', 'youth' ); ?>
            </p>
        </header>


        <div class="primary-posts-album">
            <div class="row">
				<!-- Posts row -->
                <?php 
					// Bring only posts with thumbnail
                    $args = array(
                        'meta_query' => array(
                            array(
                             'key' => '_thumbnail_id',
                             'compare' => 'EXISTS'
                            ),
                        ),
                    );

                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) {
                        
                        // Load posts loop.
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            get_template_part( 'template-parts/content', 'thumbnail');
                        }
                    }
                ?>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();