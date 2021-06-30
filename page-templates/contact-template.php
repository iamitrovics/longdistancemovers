<?php
/**
 * Template Name: Contact Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-content">
                    <h1><?php the_field('main_title_header_contact'); ?></h1>
					<?php the_field('form_code_header_contact'); ?>
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

<?php get_footer(); ?>

