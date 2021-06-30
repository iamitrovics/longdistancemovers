<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

	<div id="city-list">
		<h2><?php the_field('main_title_aras_gen', 'options'); ?></h2>
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
	<!-- /#city-list -->
	<footer id="page-footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer-block">
						<div class="footer-logo">
							<img src="<?php the_field('footer_logo_about', 'options'); ?>" alt="<?php bloginfo('name'); ?>">
						</div>
						<!-- /.footer-logo -->
						<?php the_field('about_text_footer', 'options'); ?>
						<span class="company-code"><?php the_field('company_code_footer', 'options'); ?></span>
						<!-- /.company-code -->
					</div>
					<!-- /.footer-block -->
				</div>
				<!-- /.col -->
				<div class="col">
					<div class="footer-block">
						<span class="footer-title"><?php the_field('block_title_newsletter', 'options'); ?></span>
						<!-- /.footer-title -->
						<div class="newsletter">
							<form action="">
								<div class="form-group">
									<input type="email" placeholder="Your E-Mail Address">
									<i class="fal fa-paper-plane"></i>
								</div>
								<!-- /.form-group -->
								<button type="submit">Send</button>
							</form>
						</div>
						<!-- /.newsletter -->
						<?php the_field('newsletter_notice_footer', 'options'); ?>
					</div>
					<!-- /.footer-block -->
				</div>
				<!-- /.col -->
				<div class="col">
					<div class="footer-block">
						<span class="footer-title"><?php the_field('block_title_sitemap_footer', 'options') ;?></span>
						<!-- /.footer-title -->
						<div class="footer-sitemap">
							<?php wp_nav_menu( array( 'theme_location' => 'services' ) ); ?>
						</div>
						<!-- /.in-touch -->
					</div>
					<!-- /.footer-block -->
				</div>
				<!-- /.col -->
				<div class="col">
					<div class="footer-block">
						<span class="footer-title"><?php the_field('block_title_footer_socials', 'options'); ?></span>
						<div class="follow-us">
							<ul>
								<?php if( have_rows('list_of_socials_gen', 'options') ): ?>
									<?php while( have_rows('list_of_socials_gen', 'options') ): the_row(); ?>

										<li><a href="<?php the_sub_field('link_to_socials'); ?>" target="_blank"><?php the_sub_field('icon_code') ;?></a></li>

									<?php endwhile; ?>
								<?php endif; ?>

							</ul>
						</div>
						<!-- /.follow-us -->
						<div class="certification">
							<span class="footer-title"><?php the_field('block_title_cert_footer', 'options'); ?></span>
							<!-- /.footer-title -->
							<div class="cert-list">
								<img src="<?php bloginfo('template_directory'); ?>/img/ico/cert2.png" alt="">
								<img src="<?php bloginfo('template_directory'); ?>/img/ico/cert3.png" alt="">
							</div>
							<!-- /.cert-list -->
						</div>
						<!-- /.certification -->
					</div>
					<!-- /.footer-block -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</footer>
	<!-- /#page-footer -->
	<div class="copy-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="copy-bar-in">
						<small><?php the_field('copyright_notice_footer', 'options'); ?></small>
						<div class="footer-links">
							<?php wp_nav_menu( array( 'theme_location' => 'copy' ) ); ?>
						</div>
						<!-- /.footer-links -->
					</div>
					<!-- /.copy-bar-in -->
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.copy-bar -->
	</div>
	<!-- /.page-wrapper -->
  
    <?php wp_footer(); ?>

	<?php if( get_field('footer_code_snippet', 'options') ): ?>
		<?php the_field('footer_code_snippet', 'options'); ?>
	<?php endif; ?>

	<script>
		//animated words array
		var hellos = ["EXPENSIVE", "STRESSFUL", "TIME-CONSUMING"];
		var index = 0; // index of the currently displayed hello
		jQuery("#masheader h1 strong").text(hellos[0]); // start by showing a hello
		(function animate() { // the function responsibe for the animation
			jQuery("#masheader h1 strong").fadeOut(1000, function() { // first fadeOut #hellos
				index = (index + 1) % hellos.length; // when fadeOut complete, increment the index (check if go beyond the length of the array)
				this.textContent = hellos[index]; // change text accordingly
			}).fadeIn(1000, animate); // then fadeIn. When fadeIn finishes, call animate again
		})();
	</script>	

</body>
</html>

