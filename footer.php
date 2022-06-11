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

	<?php 
	$values = get_field( 'city_phone_number_header' );
	if ( $values ) { ?>
	<div id="fixed-cta">
		
		<a href="tel:<?php the_field('city_phone_number_header') ?>">
			<em><i class="fal fa-phone-alt"></i></em>
			<div class="phone-text">
				<small class="label">Get a Free Estimate</small>
				<span><?php the_field('city_phone_number_header') ?></span>
			</div>
			<!-- // text  -->
		</a>

	</div>
	<!-- // fixed cta  -->	
	<?php 
	} else { ?>
	<div id="fixed-cta">
		
		<a href="tel:<?php the_field('phone_number_general', 'options'); ?>">
			<em><i class="fal fa-phone-alt"></i></em>
			<div class="phone-text">
				<small class="label">Get a Free Estimate</small>
				<span><?php the_field('phone_number_general', 'options'); ?></span>
			</div>
			<!-- // text  -->
		</a>

	</div>
	<!-- // fixed cta  -->	
	<?php } ?>

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

<script>

jQuery(document).ready(function($) {

    //Add pins on page load
    $('input[name="your-state"]').parent().addClass('pinned');
    $('input[name="your-stateto"]').parent().addClass('pinned');

    // Add pins when field has no value, either on change or blur (leaving the field)
    $('input[name="zip-from"]').on('change', function() {
      if ($(this).val().length === 0) {
        $(this).parent('span').siblings('span').addClass('pinned');
        $(this).parent('span').siblings('span').find('input[name="your-state"]').val('');
      }
    });
    $('input[name="zip-from"]').blur(function() {
      if ($(this).val().length === 0) {
        $(this).parent('span').siblings('span').addClass('pinned');
        $(this).parent('span').siblings('span').find('input[name="your-state"]').val('');
      }
    });
    $('input[name="zip-to"]').on('change', function() {
      if ($(this).val().length === 0) {
        $(this).parent('span').siblings('span').addClass('pinned');
        $(this).parent('span').siblings('span').find('input[name="your-stateto"]').val('');
      }
    });
    $('input[name="zip-to"]').blur(function() {
      if ($(this).val().length === 0) {
        $(this).parent('span').siblings('span').addClass('pinned');
        $(this).parent('span').siblings('span').find('input[name="your-stateto"]').val('');
      }
    });

    //Trigger API check for Zip from state
    $('input[name="zip-from"]').mouseout(function(){
        var zip = $(this).val();
        var stateFrom = $(this).parent('span').siblings('span').find('input[name="your-state"]');

        var api_key = 'AIzaSyAkitxoIA55jYyfHIt871IKgOUK4EV4KG0';
        if(zip.length){
            //make a request to the google geocode api with the zipcode as the address parameter and your api key
            $.get('https://maps.googleapis.com/maps/api/geocode/json?address='+zip+'&key='+api_key).then(function(response){
            //parse the response for a list of matching city/state
            var possibleLocalities = geocodeResponseToCityState(response, stateFrom);
            //Add state letters to State field
            $(stateFrom).val(possibleLocalities[0].state);
            });
        }
    });

    //Trigger API check for Zip to state
    $('input[name="zip-to"]').mouseout(function(){
        var zip = $(this).val();
        var stateTo = $(this).parent('span').siblings('span').find('input[name="your-stateto"]');

        var api_key = 'AIzaSyAkitxoIA55jYyfHIt871IKgOUK4EV4KG0';
        if(zip.length){
            //make a request to the google geocode api with the zipcode as the address parameter and your api key
            $.get('https://maps.googleapis.com/maps/api/geocode/json?address='+zip+'&key='+api_key).then(function(response){
            //parse the response for a list of matching city/state
            var possibleLocalities = geocodeResponseToCityState(response, stateTo);
            //fillCityAndStateFields(possibleLocalities, stateTo);
            $(stateTo).val(possibleLocalities[0].state);
            });
        }
    });


    function geocodeResponseToCityState(geocodeJSON, state) { //will return and array of matching {city,state} objects
      var parsedLocalities = [];
      $(state).parent().removeClass('pinned');
      //$('#state').parent().removeClass('pinned');
      if(geocodeJSON.results.length) {
        for(var i = 0; i < geocodeJSON.results.length; i++){
          var result = geocodeJSON.results[i];

          var locality = {};
          for(var j=0; j<result.address_components.length; j++){
            var types = result.address_components[j].types;
            for(var k = 0; k < types.length; k++) {
              if(types[k] == 'locality') {
                locality.city = result.address_components[j].long_name;
              } else if(types[k] == 'administrative_area_level_1') {
                locality.state = result.address_components[j].short_name;
              }
            }
          }
          parsedLocalities.push(locality);

          //check for additional cities within this zip code
          if(result.postcode_localities){
            for(var l = 0; l<result.postcode_localities.length;l++) {
              parsedLocalities.push({city:result.postcode_localities[l],state:locality.state});
            }
          }
        }
      } else {
        // $('#state').parent().addClass('pinned');
        // $('#state').val('');
        $(state).parent().addClass('pinned');
        $(state).val('');
        console.log('error: no address components found');
      }
      return parsedLocalities;
    }

});

  </script>

</body>
</html>

