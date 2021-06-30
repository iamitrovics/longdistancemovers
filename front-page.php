<?php 
/**
 * Homepage / Front Page
**/
get_header(); ?>

<div id="masheader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('main_title_hero_home'); ?> <strong></strong></h1>
                <span class="subtitle"><?php the_field('subtitle_hero_home'); ?></span>
                <!-- /.subtitle -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row header-content">
            <div class="col-md-5 col-lg-7 col-xl-7">
                <div class="header-photo">
                    <?php
                    $imageID = get_field('hero_image_home_header');
                    $image = wp_get_attachment_image_src( $imageID, 'container-image' );
                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                    ?> 

                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                </div>
                <!-- /.header-photo -->
            </div>
            <!-- /.col-md-5 col-lg-7 col-xl-8 -->
            <div class="col-md-7 col-lg-5 col-xl-5">
                <div class="quote-form">

                    <div class="quote-form-in">
                        <span class="quote-form-title"><?php the_field('form_title_quote_cta', 'options'); ?></span>
                        <!-- /.quote-form-title -->

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#home-quote" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#auto-quote" role="tab" aria-controls="nav-profile" aria-selected="false">Car</a>
                            </div>
                        </nav>
                        <!-- // nav  -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="home-quote" role="tabpanel" aria-labelledby="nav-home-tab">
                                <?php the_field('form_code_quote_cta', 'options'); ?>
                            </div>
                            <!-- // home quote  -->
                            <div class="tab-pane fade" id="auto-quote" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <?php the_field('auto_form_code_quote', 'options'); ?>
                            </div>
                            <!-- // car quote  -->
                        </div>
                        <!-- // content  -->

                    </div>
                    <!-- /.quote-form-in -->

                </div>
                <!-- /.quote-form -->
            </div>
            <!-- /.col-md-7 col-lg-5 col-xl-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#masheader -->
<section id="about-area">
    <div class="heading-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-text-in">
                        <?php the_field('content_block_about_home'); ?>
                    </div>
                    <!-- /.heading-text-in -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.heading-text --> 
    <div class="how-create">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_field('main_title_features_home'); ?></h2>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                <?php if( have_rows('features_list_about_home') ): ?>
                    <?php while( have_rows('features_list_about_home') ): the_row(); ?>

                        <div class="col-md-6 col-lg-3">
                            <div class="howto-item">
                                <div class="howto-ico"><?php the_sub_field('icon_code'); ?></div>
                                <!-- /.howto-ico -->
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('text'); ?></p>
                            </div>
                            <!-- /.howto-item -->
                        </div>
                        <!-- /.col-md-6 col-lg-3 -->

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.how-create -->
</section>
<!-- /#about-area -->
<section id="services">
    <div class="container">
        <div class="row intro">
            <div class="col-md-12">
                <h2><?php the_field('main_title_services_home'); ?></h2>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
         <div class="row" id="service-boxes">

            <?php
                $post_objects = get_field('services_list_home');

                if( $post_objects ): ?>
                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>

                        <div class="col-md-4">
                            <div class="service-box">
                                <div class="services-ico">
                                    <?php the_field('icon_code_service_sing'); ?>
                                </div>
                                <!-- /.services-ico -->
                                <h3><?php the_title(); ?></h3>
                                <?php the_field('short_description_service_single'); ?>
                                <a href="<?php echo get_permalink(); ?>" class="serv-more">Learn more</a>
                                <a href="<?php echo get_permalink(); ?>" class="url-wrap">Learn more</a>
                            </div>
                            <!-- /.service-box -->
                        </div>
                        <!-- /.col-md-4 -->

                    <?php endforeach; ?>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#services -->

<?php include (TEMPLATEPATH . '/inc/inc-process.php' ); ?>

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
                        $post_objects = get_field('reviews_list_home');

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

<?php get_footer(); ?>
