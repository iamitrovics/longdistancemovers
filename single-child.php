<?php
/*
 * Template Name: Parent Child Template
 * Template Post Type: post
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
                        
                            on <?php echo get_the_date( 'F j, Y' ); ?>
            
                        </span>
                        <div class="author-desc">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
                            <div class="author-content">
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                                <p><?php the_author_description(); ?></p>
                            </div>
                            <!-- /.author-content -->
                        </div>

                        <!-- /.blog-info -->
                        <h1><?php the_title(); ?></h1>

                            <?php if( have_rows('list_of_posts_parent') ): ?>
                            <div id="post-nav">
                                <div class="post-wrapper">                           
                                    <div id="nav-slider">
                                        
                                            <?php while( have_rows('list_of_posts_parent') ): the_row(); ?>

                                                <div class="item">
                                                    <div class="nav-col">
                                                        <a href="<?php the_sub_field('link_to_post'); ?>">

                                                            <div class="icon">
                                                                <img src="<?php the_sub_field('icon'); ?>" alt="">
                                                            </div>
                                                            <span><?php the_sub_field('label'); ?></span>

                                                        </a>
                                                    </div>
                                                    <!-- // col  -->
                                                </div>

                                            <?php endwhile; ?>
                                        
                                    </div>
                                    <!-- // nav  -->
                                </div>
                                <!-- // wrapper  -->
                            </div>
                            <!-- // post nav  -->
                            <?php endif; ?>                            
                        
                            <?php if( have_rows('content_layout_blog') ): ?>
                                <?php while( have_rows('content_layout_blog') ): the_row(); ?>
                                    <?php if( get_row_layout() == 'intro_text' ): ?>
                                    
                                        <div class="blog-intro">
                                            <?php the_sub_field('intro_content'); ?>
                                        </div>
                                        <!-- // intro  -->
                                        
                                    <?php elseif( get_row_layout() == 'full_width_content' ): ?>
                                        <div class="blog-content-single">
                                            <?php the_sub_field('content_block'); ?>
                                        </div> <!-- blog-content-single -->

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

                                    <?php elseif( get_row_layout() == 'featured_article' ): ?>    
                                        <?php
                                            $post_objects = get_sub_field('featured_article_list');

                                            if( $post_objects ): ?>
                                                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                    <?php setup_postdata($post); ?>
                                                        
                                                    <div class="featured-article">
                                                        <div class="blog-box">
                                                            <div class="blog-photo">
                                                                <a href="<?php echo get_permalink(); ?>" target="_blank">
                                                                        <?php
                                                                        $imageID = get_field('featured_image_blog');
                                                                        $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                                                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                                        ?> 

                                                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                                </a>
                                                            </div>
                                                            <!-- /.blog-photo -->
                                                            <div class="blog-content">
                                                                <a href="<?php echo get_permalink(); ?>" target="_blank"><h3><?php the_title(); ?></h3></a>
                                                                <div class="read-more">
                                                                    <a href="<?php echo get_permalink(); ?>" target="_blank">Read More</a>
                                                                </div>
                                                                <!-- /.read-more -->
                                                            </div>
                                                            <!-- /.blog-content -->
                                                        </div>
                                                    </div>
                                                    <!-- /.featured-article -->
                                                        
                                                <?php endforeach; ?>
                                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                        <?php endif; ?>
                                        <?php wp_reset_postdata(); ?>

                                    <?php elseif( get_row_layout() == 'video' ): ?>

                                        <div class="blog-video">
                                            <?php the_sub_field('embedded_code'); ?>
                                        </div>
                                        <!-- // video  -->

                                    <?php elseif( get_row_layout() == 'accordion' ): ?>

                                    <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                                        <div class="quote-cta--single">
                                            <span class="title"><?php the_sub_field('cta_title'); ?></span>
                                            <a href="#bottom-form" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                        </div>
                                        <!-- // single  -->  
                        
                                    <?php elseif( get_row_layout() == 'table' ): ?>

                                        <table style="width:100%" class="single-table">
                                            <thead>
                                                <tr role="row">
                                                <?php
                                                    // check if the repeater field has rows of data
                                                    if(have_rows('table_head_cells')):
                                                        // loop through the rows of data
                                                        while(have_rows('table_head_cells')) : the_row();
                                                            $hlabel = get_sub_field('table_cell_label_thead');
                                                            ?>  
                                                            <th tabindex="0" rowspan="1" colspan="1"><?php echo $hlabel; ?></th>
                                                        <?php endwhile;
                                                    else :
                                                        echo 'No data';
                                                    endif;
                                                    ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php while ( have_posts() ) : the_post(); ?>
                                                <?php 
                                                // check for rows (parent repeater)
                                                if( have_rows('table_body_row') ): ?>   
                                                    <?php 
                                                    // loop through rows (parent repeater)
                                                    while( have_rows('table_body_row') ): the_row(); ?>
                                                            <?php 
                                                            // check for rows (sub repeater)
                                                            if( have_rows('table_body_cells') ): ?>
                                                                <tr>
                                                                    <?php 
                                                                    // loop through rows (sub repeater)
                                                                    while( have_rows('table_body_cells') ): the_row();
                                                                        ?>
                                                                        <td><?php the_sub_field('table_cell_label_tbody'); ?></td>
                                                                    <?php endwhile; ?>
                                                                </tr>
                                                            <?php endif; //if( get_sub_field('') ): ?>
                                                    <?php endwhile; // while( has_sub_field('') ): ?>
                                                <?php endif; // if( get_field('') ): ?>
                                                <?php endwhile; // end of the loop. ?>
                                            </tbody>
                                        </table>

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

        <div id="contact-page">
            <div class="container" id="bottom-form">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="contact-content">
                            <h2>Get a Quote</h2>
                            
                            <div class="quote-form-in">

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

                            <div class="contact-info">
                                <div class="row">
                                    <?php if( have_rows('info_blocks_contact') ): ?>
                                        <?php while( have_rows('info_blocks_contact') ): the_row(); ?>

                                            <div class="col-lg-6">
                                                <h2><?php the_sub_field('title'); ?></h2>
                                                <p><?php the_sub_field('content'); ?></p>
                                            </div>
                                            <!-- /.col-lg-6 -->

                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.contact-info -->
                        </div>
                        <!-- /.contact-content -->
                    </div>
                    <!-- /.col-md-6 -->
                    <?php if( get_field('map_code_contact_page') ): ?>
                    <div class="contact-map">
                        <?php the_field('map_code_contact_page'); ?>
                    </div>
                    <!-- /.contact-map -->
                    <?php endif; ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#contact-page -->
        
        <div id="advanced-posts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Recent Posts</h2>
                        <div class="blog-listing-content">
                            <div class="row">

                                <?php
                                $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' =>  [ $post->ID ]) ); ?>  
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                    <div class="col-md-4">
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
                                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                <div class="read-more">
                                                    <a href="<?php echo get_permalink(); ?>">Read More</a>
                                                </div>
                                                <!-- /.read-more -->
                                            </div>
                                            <!-- /.blog-content -->
                                        </div>
                                        <!-- /.blog-box -->
                                    </div>
                                    <!-- /.col-md-4 -->

                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>    
                                <?php wp_reset_query(); ?>

                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.sidebar-posts-list -->
                    </div>
                    <!-- // col-lg-8  -->
                </div>
                <!-- // row  -->
            </div>
            <!-- // container  -->
        </div>
        <!-- // advanced-posts  -->
        <div id="advanced-posts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Related Posts</h2>
                        <div class="blog-listing-content">
                            <div class="row">

                            <?php
                                $categories =   get_the_category();
                                // print_r($categories);
                                $rp_query   =  new WP_Query ([
                                    'posts_per_page'        =>  3,
                                    'post__not_in'          =>  [ $post->ID ],
                                    'cat'                   =>  !empty($categories) ? $categories[0]->term_id : null,

                                ]);

                                if ( $rp_query->have_posts() ) {
                                    while( $rp_query->have_posts() ) {
                                        $rp_query->the_post();
                                        ?>

                                    <div class="col-md-4">
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
                                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                <div class="read-more">
                                                    <a href="<?php echo get_permalink(); ?>">Read More</a>
                                                </div>
                                                <!-- /.read-more -->
                                            </div>
                                            <!-- /.blog-content -->
                                        </div>
                                        <!-- /.blog-box -->
                                    </div>
                                    <!-- /.col-md-4 -->

                                    <?php
                                        }

                                        wp_reset_postdata();

                                    }

                                ?>

                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.sidebar-posts-list -->
                    </div>
                    <!-- // col-lg-8  -->
                </div>
                <!-- // row  -->
            </div>
            <!-- // container  -->
        </div>
        <!-- // advanced-posts  -->

        <div id="blog-bottom-cta">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php previous_post_link( '%link', '%title', TRUE ); ?> 
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <?php next_post_link( '%link', '%title', TRUE ); ?>
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
