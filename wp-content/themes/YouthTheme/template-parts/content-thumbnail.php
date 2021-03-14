<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Youth
 */

?>

<article id="post-thumbnail-<?php the_ID(); ?>" class="col-md-4">
    <!-- Post card -->
    <div class="card pb-4 border-0 h-100">
        <!-- Photo and categories-->
        <img src="<?php echo get_the_post_thumbnail_url();?>" height="240" width="350" style="object-fit: cover;"
            alt="featured-post-thumb-<?php the_ID();?>">

        <!-- Post thumbnail body-->
        <div class="card-body bg-transparent pl-1 pt-2">
            <div class="row mb-2">
                <?php youth_category_list();?>
            </div>

            <a href="<?php the_permalink(); ?>" class="title-link" title="<?php the_title_attribute(); ?>">
                <h3 class="text-justify"><?php the_title();?></h3>
            </a>
        </div>

        <!-- Post footer -->
        <div class="card-footer bg-transparent pl-1 border-top-0">
            <!-- Info -->
            <div class="d-flex align-items-center mb-2 text-muted">
                <i class="bi bi-calendar-day mr-1"></i>

                <?php the_date( 'jS M, Y' , '<span>', '</span>', true); ?>

                <span>
                    <?php _e(' - Por ', 'youth')?> 
                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ; ?>" class="ml-1 text-decoration-none">
                        <?php echo get_the_author_meta( 'display_name' ) ?>
                    </a>
                </span>
            </div>
        </div>
    </div>
</article><!-- #post-thumbnail-<?php the_ID(); ?> -->