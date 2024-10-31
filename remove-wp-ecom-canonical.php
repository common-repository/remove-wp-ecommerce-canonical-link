<?php
/*
Plugin Name: Remove WP-Ecommerce Canonical Link
Plugin URI: 
Description: Removes the canonical link added by WP-Ecommerce. Useful for sites using other plugins that automatically add a canonical link.
Author: Dzynit
Author URI: http://www.dzynit.net
Version: 1.0
*/

if (function_exists('wpsc_canonical_url')) {
	remove_action( 'template_redirect', 'wpsc_canonical_url' );
}

?>