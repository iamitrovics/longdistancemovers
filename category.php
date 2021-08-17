<?php get_header(); ?>

    <div id="blog-listing-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php single_cat_title('Category: '); ?>  	</h1>
                    <p><?php the_field('intro_text_blog_listing' , get_option('page_for_posts')); ?></p>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-filters">
                        <ul>
                            <li><a href="<?php bloginfo('url'); ?>/blog" class="active">All</a></li>
                            <?php wp_list_categories('title_li='); ?>
                        </ul>
                    </div>
                    <!-- /.blog-filters -->
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

                        <?php while ( have_posts() ) : the_post(); ?>
                                                
                                <div class="blog-box">
                                    <div class="blog-photo">
                                        <a href="<?php the_permalink(); ?>">
                                            <span><i class="fal fa-long-arrow-right"></i></span>

                                                <?php 
                                                $values = get_field( 'featured_image_blog' );
                                                if ( $values ) { ?>

                                                    <?php
                                                    $imageID = get_field('featured_image_blog');
                                                    $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
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
                            
                            <?php endwhile; // end of the loop. ?> 

                        <div class="custom-pagination">
                            <ul>
                                <li class="prev"><a href="#"><span class="icon-logo-sm-r"></span></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#"><span class="icon-logo-sm"></span></a></li>
                            </ul>
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
