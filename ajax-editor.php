<?php
/**
 * Plugin Name: T5 AJAX Editor
 * Version:     2014.01.26
 * Description: Load the WP_Editor per AJAX request. Requires T5 Libraries.
 * Author:      toscho
 * License:     MIT
 */

namespace T5;

use T5\Core\Autoload\Autoload;
use T5\Core\Autoload\Namespace_Base_Autoload_Rule;
use T5\Ajax_Editor\Ajax_Editor_Controller;

is_admin() && add_action( 't5_lib_loaded', function( Autoload $autoloader ) {
	$autoloader->add_rule(
			   new Namespace_Base_Autoload_Rule( __DIR__ , __NAMESPACE__ )
	);
	new Ajax_Editor_Controller();
});