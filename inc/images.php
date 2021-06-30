<?php
/**
 * Custom image sizes
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// general
add_image_size('preview-image', 300, 200, TRUE);
add_image_size('thumb-image', 600, 9999, FALSE);
add_image_size('container-image', 1024, 9999, FALSE);

// Services
add_image_size('service-image', 800, 605, TRUE);

// Blog
add_image_size('blog-image', 826, 417, TRUE);
add_image_size('blog-header', 1920, 600, TRUE);
