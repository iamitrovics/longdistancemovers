<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post
 */
  
 get_header();  ?>

    <div id="about-header" class="featured-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_field('custom_title_featured_article'); ?></h1>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="header-text">
                        <?php the_field('header_text_featured_article'); ?>
                    </div>
                    <!-- /.header-photo -->
                </div>
                <!-- /.col-md-8 col-lg-6 -->
                <div class="header-photo featured-photo">
                    <img src="<?php the_field('featured_image_blog_featured'); ?>" alt="">
                </div>
                <!-- /.quote-form -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#about-header -->

    <div id="featured-article">

        <?php if( have_rows('content_sections_main_layout') ): ?>
            <?php while( have_rows('content_sections_main_layout') ): the_row(); ?>
                <?php if( get_row_layout() == 'heading_section' ): ?>

                    <div class="heading-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="heading-inner">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                    <!-- // inner  -->
                                </div>
                                <!-- // col  -->
                                <div class="col-md-2">
                                    <div class="to-top--wrapper">
                                        <a href="#about-header" class="btn-up"><span>To top</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- // row  -->
                        </div>
                        <!-- // container  -->
                    </div>
                    <!-- // heading wrapper  -->

                <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                    <?php if (get_sub_field('background_color') == 'White') { ?>
                        <div class="full-content">
                    <?php } elseif (get_sub_field('background_color') == 'Gray') { ?>
                        <div class="full-content gray">
                    <?php } elseif (get_sub_field('background_color') == 'Blue') { ?>
                        <div class="full-content blue">
                    <?php } elseif (get_sub_field('background_color') == 'Dark Blue') { ?>
                        <div class="full-content dark-blue">                                                        
                    <?php } ?>   

                        <div class="container">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="content-block">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                </div>
                                <!-- // col  -->
                            </div>
                            <!-- // row  -->
                        </div>
                        <!-- // container  -->
                    </div>
                    <!-- // full contennt  -->

                <?php elseif( get_row_layout() == 'content_left_image_right' ): ?>

                    <?php if (get_sub_field('background_color') == 'White') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Gray') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Blue') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Dark Blue') { ?>
                        <div class="content-wrapper">                                                        
                    <?php } ?>   
                    
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="content-text">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                </div>
                                <!-- // text  -->

                                <div class="col-md-6">
                                    <div class="image-holder">
                                        <?php
                                        $imageID = get_sub_field('featured_image');
                                        $image = wp_get_attachment_image_src( $imageID, 'service-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php the_sub_field('image_alt'); ?>" src="<?php echo $image[0]; ?>" /> 
                                        <div class="caption">
                                            <small><?php the_sub_field('image_caption'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <!-- // image holder  -->

                            </div>
                            <!-- // row  -->
                        </div>
                    </div>
                    <!-- // content wrapper  -->

                <?php elseif( get_row_layout() == 'image_left_content_right' ): ?>

                    <?php if (get_sub_field('background_color') == 'White') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Gray') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Blue') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Dark Blue') { ?>
                        <div class="content-wrapper">                                                        
                    <?php } ?>   
                    
                        <div class="container">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="image-holder">
                                        <?php
                                        $imageID = get_sub_field('featured_image');
                                        $image = wp_get_attachment_image_src( $imageID, 'service-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php the_sub_field('image_alt'); ?>" src="<?php echo $image[0]; ?>" /> 
                                        <div class="caption">
                                            <small><?php the_sub_field('image_caption'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <!-- // image holder  -->

                                <div class="col-md-6">
                                    <div class="content-text content-right">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                </div>
                                <!-- // text  -->                                

                            </div>
                            <!-- // row  -->
                        </div>
                    </div>
                    <!-- // content wrapper  -->                    

                <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                    <div class="full-image">
                        <div class="container">
                            <div class="row col-md-8 offset-md-2">
                                <div class="image-holder">
                                    <?php
                                    $imageID = get_sub_field('featued_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'container-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php the_sub_field('image_alt'); ?>" src="<?php echo $image[0]; ?>" />  
                                    <div class="caption">
                                        <small><?php the_sub_field('image_caption'); ?></small>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>

                <?php elseif( get_row_layout() == 'columns_list' ): ?>

                    <div class="columns-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="columns-intro">
                                        <?php the_sub_field('content_top'); ?>
                                    </div>
                                </div>
                                <!-- // intro col  -->
                            </div>
                            <!-- // row  -->
                            <div class="row list-cols">
                                <?php if( have_rows('list_blocks') ): ?>
                                <?php while( have_rows('list_blocks') ): the_row(); ?>
                                <div class="col-md-4">

                                    <div class="cols">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                </div>
                            <!-- // cols  -->
                                <?php endwhile; ?>
                                <?php endif; ?>
           
                            </div>
                            <!-- // row  -->
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="columns-outro">
                                        <?php the_sub_field('content_bottom'); ?>
                                    </div>
                                </div>
                                <!-- // intro col  -->
                            </div>
                            <!-- // row  -->                            
                        </div>
                    </div>
                    <!-- // columns wrapper  -->

                <?php elseif( get_row_layout() == 'video' ): ?>

                    <div class="full-video">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1">
                                    <div class="video-holder">
                                        <?php the_sub_field('video_code'); ?>                                   
                                    </div>
                                </div>
                                <!-- // col  -->
                            </div>
                        </div>
                    </div>                    

                <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="cta-text">
                                    <h4><?php the_sub_field('cta_title'); ?></h4>
                                    <a href="#middle-quote" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // text  -->

                <?php elseif( get_row_layout() == 'features' ): ?>

                    <div class="features-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="intro-text">
                                        <?php the_sub_field('intro_text'); ?>
                                    </div>
                                    <!-- // intro text  -->
                                </div>
                            </div>
                            <!-- // row  -->
                            <div class="row">
                                <?php if( have_rows('features_list') ): ?>
                                    <?php while( have_rows('features_list') ): the_row(); ?>

                                        <div class="col-md-4">
                                            <div class="feat-card">
                                                <div class="feat-ico">
                                                    <?php the_sub_field('icon_code'); ?>
                                                </div>
                                                <!-- // cion  -->
                                                <div class="feat-desc">
                                                    <span class="title"><?php the_sub_field('title'); ?></span>
                                                    <?php the_sub_field('text'); ?>
                                                </div>
                                                <!-- // desc  -->
                                            </div>
                                        </div>
                                        <!-- // card  -->

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <!-- // row  -->
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="intro-text">
                                        <?php the_sub_field('bottom_content'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // container  -->
                    </div>
                    <!-- // features wrapper     -->

                <?php elseif( get_row_layout() == 'faq' ): ?>

                    <div class="faq-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-11">

                                    <div class="intro-text">
                                        <?php the_sub_field('intro_text'); ?>
                                    </div>
                                    <!-- // text  -->

                            <div class="accordion">

                                <?php if( have_rows('faq_list') ): ?>
                                    <?php $i=0; ?>
                                    <?php while( have_rows('faq_list') ): the_row(); ?>

                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button  data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>">
                                                    <?php the_sub_field('question'); ?>
                                                    </button>
                                                </h5>
                                            </div>
                                            <!-- // header  -->

                                            <div id="collapse-<?php echo $i; ?>" class="collapse" aria-labelledby="heading-<?php echo $i; ?>" data-parent=".accordion">
                                            <div class="card-body">
                                                <?php the_sub_field('content_block'); ?>
                                            </div>
                                        </div>
                                        <!-- // colapse  -->
                                        </div>

                                    <?php $i++; endwhile; ?>
                                <?php endif; ?>

                            </div>         
                            <!-- // accordion   -->

                                </div>
                                <!-- // col  -->
                            </div>
                            <!-- // row  -->
                        </div>
                        <!-- // container  -->
                    </div>
                    <!-- // faq wrapper  -->

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <!-- // featured article  -->

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
                            $post_objects = get_field('reviews_list_reviews_about');

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
