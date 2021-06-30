<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <?php if( get_field('header_image_blog_single') ): ?>
    <div id="blog-single-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                
                <?php
                $imageID = get_field('header_image_blog_single');
                $image = wp_get_attachment_image_src( $imageID, 'container-image' );
                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                ?> 

                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                  
                
                </div>
            </div>       
        </div>
    </div>
    <!-- /#blog-listing-header -->
    <?php endif; ?>

    <div id="blog-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="blog-single-in">

                        <span class="blog-info">
                        Posted in 
                        <?php echo get_the_category_list(', '); ?>
                        
                            on <?php echo get_the_date( 'F j, Y' ); ?></span>

                        <!-- /.blog-info -->
                        <h1><?php the_title(); ?></h1>
                        
                            <?php if( have_rows('content_layout_blog') ): ?>
                                <?php while( have_rows('content_layout_blog') ): the_row(); ?>
                                    <?php if( get_row_layout() == 'intro_text' ): ?>
                                    
                                        <div class="blog-intro">
                                            <?php the_sub_field('intro_content'); ?>
                                        </div>
                                        <!-- // intro  -->
                                        
                                    <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                                        <?php the_sub_field('content_block'); ?>

                                    <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                                        <div class="blog-photo">
                                            <?php
                                            $imageID = get_sub_field('featured_image');
                                            $image = wp_get_attachment_image_src( $imageID, 'container-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php the_sub_field('image_alt_text'); ?>" src="<?php echo $image[0]; ?>" /> 
                                            <div class="image__caption">
                                                <span><?php the_sub_field('image_caption'); ?></span>
                                            </div>
                                        </div>
                                        <!-- /.blog-photo -->

                                    <?php elseif( get_row_layout() == 'half_width_image' ): ?>

                                    <?php elseif( get_row_layout() == 'quote' ): ?>

                                    <?php elseif( get_row_layout() == 'video' ): ?>

                                        <div class="blog-video">
                                            <?php the_sub_field('embedded_code'); ?>
                                        </div>
                                        <!-- // video  -->

                                    <?php elseif( get_row_layout() == 'accordion' ): ?>

                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>   

                    </div>
                    <!-- /#blog-single-in -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div id="blog-bottom-cta">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="#">What are the Best San Francisco High Schools?</a>
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <a href="#">What are the Best San Francisco High Schools?</a>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#blog-bottom-cta -->
    </div>
    <!-- /#blog-single-->

<?php
get_footer();
