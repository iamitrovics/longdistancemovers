<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

    <div id="blog-listing-header" class="thanks-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_field('main_title_ermac', 'options'); ?></h1>
                    <p><?php the_field('content_block_ermac', 'options'); ?></p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-back">Back to homepage</a>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-listing-header -->

<?php
get_footer();
