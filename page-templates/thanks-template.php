<?php
/**
 * Template Name: Thanks Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <div id="blog-listing-header" class="thanks-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_field('main_title_thanks'); ?></h1>
                    <p><?php the_field('content_block_thanks'); ?></p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-back">Back to homepage</a>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-listing-header -->

<?php get_footer(); ?>

