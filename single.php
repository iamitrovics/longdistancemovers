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
                            <h1>Get a Quote</h1>
                            
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
