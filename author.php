<?php
/**
 * The template for displaying the author pages
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <div id="blog-listing-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_author(); ?></h1>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-listing-header -->

    <div id="blog-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-listing-content">

                        <?php   

                            while(have_posts()): the_post();
                                ?>
                                                
                                <div class="blog-box">
                                    <div class="blog-photo">
                                        <a href="<?php the_permalink(); ?>">
                                            <span><i class="fal fa-long-arrow-right"></i></span>

                                                <?php 
                                                $values = get_field( 'featured_image_blog' );
                                                if ( $values ) { ?>

                                                    <?php
                                                    $imageID = get_field('featured_image_blog');
                                                    $image = wp_get_attachment_image_src( $imageID, 'container-image' );
                                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                    ?> 

                                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 

                                                <?php 
                                                } else { ?>

                                                    <img src="<?php bloginfo('template_directory'); ?>/img/misc/placeholder.jpg" alt="">

                                                <?php } ?>

                                        </a>
                                    </div>
                                    <!-- /.blog-photo -->
                                    <div class="blog-content">
                                        <span class="blog-info">
                                        Posted in 
                                        <?php echo get_the_category_list(', '); ?>
                                        
                                         on <?php echo get_the_date( 'F j, Y' ); ?></span>
                                        <!-- /.blog-info -->
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    </div>
                                    <!-- /.blog-content -->
                                </div>
                                <!-- /.blog-box -->                            
                            
                            <?php endwhile; ?>

                        <div class="custom-pagination">
                            <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function ?>
                        </div>
                        <!-- // custom pagination  -->
                    </div>
                    <!-- /.header-photo -->
                    
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="quote-form">

                        <?php include (TEMPLATEPATH . '/inc/inc-sidebar.php' ); ?>

                    </div>
                    <!-- /.quote-form -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-listing-->   

<?php get_footer(); ?>
