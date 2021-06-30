<?php
/**
 * Template Name: Cities We Serve Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div id="blog-listing-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<?php 
					$values = get_field( 'main_title_cities_served' );
					if ( $values ) { ?>
                    	<h1><?php the_field('main_title_cities_served'); ?></h1>
					<?php 
					} else { ?>
						<h1><?php the_title(); ?></h1>
					<?php } ?>
                    <p><?php the_field('intro_text_cities_served'); ?></p>
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
                <div class="col-lg-12">

					<div class="location-list">
						<ul>
						<?php
						$loop = new WP_Query( array( 'post_type' => 'cities', 'posts_per_page' => 1115, 'orderby' => 'post_title',
						'order' => 'ASC') ); ?>  
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>      
						</ul>					
					</div>
					<!-- // list  -->

                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-listing-->   


<?php get_footer(); ?>

