<?php get_header(); ?>

    <div id="blog-listing-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_field('main_title_blog_listing' , get_option('page_for_posts')); ?></h1>
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

                        <?php
                            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
                            $args = array(
                                'posts_per_page' => 10, // the value from Settings > Reading by default
                                'paged'          => $current_page // current page
                            );
                            query_posts( $args );
                            
                            $wp_query->is_archive = true;
                            $wp_query->is_home = false;
                            
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
