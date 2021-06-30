<?php
/**
 * Template Name: Free Estimate Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1">
                <div class="contact-content">
                    <h1><?php the_title(); ?></h1>
                    
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

<?php get_footer(); ?>

