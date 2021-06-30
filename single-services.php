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

    <div id="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php 
                    $values = get_field( 'field_name' );
                    if ( $values ) { ?>
                        <h1><?php the_field('main_title_services_page'); ?></h1>
                    <?php 
                    } else { ?>
                        <h1><?php the_title(); ?></h1>
                    <?php } ?>

                    <?php 
                    $values = get_field( 'intro_text_services_single' );
                    if ( $values ) { ?>
                         <?php the_field('intro_text_services_single'); ?>
                    <?php 
                    } else { ?>
                         <?php the_field('short_description_service_single'); ?>
                    <?php } ?>

                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#inner-header -->

    <div id="service-single">

        <?php if( have_rows('content_blocks_services_single') ): ?>
            <?php while( have_rows('content_blocks_services_single') ): the_row(); ?>
                <?php if( get_row_layout() == 'content_blocks' ): ?>

                    <?php if( have_rows('content_blocks_repe') ): ?>
                        <?php while( have_rows('content_blocks_repe') ): the_row(); ?>

                            <div class="service-item">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="service-item-photo">
                                                <?php
                                                $imageID = get_sub_field('featured_image');
                                                $image = wp_get_attachment_image_src( $imageID, 'service-image' );
                                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                ?> 

                                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            </div>
                                            <!-- /.service-item-photo -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="service-item-content">
                                                <?php if( get_sub_field('main_title') ): ?>
                                                    <h2><?php the_sub_field('main_title'); ?></h2>
                                                <?php endif; ?>
                                                <?php the_sub_field('content'); ?>
                                            </div>
                                            <!-- /.service-item-content -->
                                        </div>
                                        <!-- /.col-md-6 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.container -->
                            </div>
                            <!-- /.service-item -->

                        <?php endwhile; ?>
                    <?php endif; ?>

                    
                <?php elseif( get_row_layout() == 'image' ): ?>

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <!-- // wrapper services  -->

    <?php include (TEMPLATEPATH . '/inc/inc_quote_form.php' ); ?>

    <section id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro">
                        <h2><?php the_field('main_title_reviews_gen', 'options'); ?></h2>
                        <?php the_field('intro_text_reviews_gen', 'options'); ?>
                    </div>
                    <!-- /.intro -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="reviews-slider">

                        <?php
                            $post_objects = get_field('list_of_reviews_serv_single');

                            if( $post_objects ): ?>
                                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                    <?php setup_postdata($post); ?>

                                    <div>
                                        <div class="review-box">
                                            <div class="review-in">
                                                <h3><?php the_title(); ?> <small><?php the_field('city_review_from'); ?></small> </h3>
                                                <div class="review-text">
                                                    <?php the_field('review_review'); ?>
                                                </div>
                                                <!-- /.review-text -->
                                                <footer>
                                                    <div class="review-logo">

                                                        <?php if (get_field('review_category_reviews') == 'Yelp') { ?>
                                                            <a href="<?php the_field('link_to_review_category'); ?>" target="_blank"><i class="fab fa-yelp"></i></a>
                                                        <?php } elseif (get_field('review_category_reviews') == 'Google') { ?>

                                                        <?php } ?>   

                                                    </div>
                                                    <!-- /.review-logo -->
                                                    <div class="review-stars">

                                                        <?php if (get_field('review_score_review') == '5') { ?>
                                                            <span class="mr-star-rating"> 
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                        <?php } elseif (get_field('review_score_review') == '4') { ?>
                                                            <span class="mr-star-rating"> 
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star empty"></i>
                                                            </span>
                                                        <?php } elseif (get_field('review_score_review') == '3') { ?>
                                                            <span class="mr-star-rating"> 
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star empty"></i>
                                                                <i class="fas fa-star empty"></i>
                                                            </span>
                                                        <?php } elseif (get_field('review_score_review') == '2') { ?>
                                                            <span class="mr-star-rating"> 
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star empty"></i>
                                                                <i class="fas fa-star empty"></i>
                                                                <i class="fas fa-star empty"></i>
                                                            </span>
                                                        <?php } elseif (get_field('review_score_review') == '1') { ?>
                                                            <span class="mr-star-rating"> 
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star empty"></i>
                                                                <i class="fas fa-star empty"></i>
                                                                <i class="fas fa-star empty"></i>
                                                                <i class="fas fa-star empty"></i>
                                                            </span>
                                                        <?php } ?>   

                                                    </div>
                                                    <!-- /.review-stars -->
                                                </footer>
                                            </div>
                                            <!-- /.review-in -->
                                        </div>
                                        <!-- /.review-box -->
                                    </div>

                                <?php endforeach; ?>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>

                    </div>
                    <!-- /#reviews-slider -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#reviews -->

    <?php include (TEMPLATEPATH . '/inc/inc-bottom.php' ); ?>

<?php
get_footer();
