<?php
/**
* Plugin Name: Advanced Custom Fields: Simplemap Backend Compatibility Fix
* Plugin URI: http://door4.com/
* Description: Hotfix plugin to patch compatibility issue that breaks WYSIWYGs when using ACF & Simplemap together.
* Version: 1.0
* Author: Dan Beckett
* Author URI: http://door4.com
* License: GPL2
*
* ACF Simplemap Backend Compatibility Fix is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 2 of the License, or
* any later version.
* 
* ACF Simplemap Backend Compatibility Fix is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with ACF Simplemap Backend Compatibility Fix. If not, see http://www.gnu.org/licenses/gpl-2.0.html.
*
* Requires at least: 3.0
* Tested up to: 4.3.1
*
* Text Domain: acf-simplemap-fix
*/

/* Use file_exists to check for the dependent plugins, so plugin queue order doesn't matter. */

$acf_check_path			=	WP_PLUGIN_DIR . '/advanced-custom-fields/acf.php';
$acf_pro_check_path		=	WP_PLUGIN_DIR . '/advanced-custom-fields-pro/acf.php';
$simplemap_check_path	=	WP_PLUGIN_DIR . '/simplemap/simplemap.php';

if( ( file_exists( $acf_check_path ) || file_exists( $acf_pro_check_path ) ) &&  file_exists( $simplemap_check_path ) ) {

	function acf_simplemap_fix_enqueue_scripts() {

		wp_register_script( 'acf-simplemap-fix-js', plugin_dir_url(__FILE__) . 'js/acf-simplemap-fix.js', array('jquery', 'acf-input'), '1.0', true);
		wp_enqueue_script( 'acf-simplemap-fix-js' );

		}

	add_action('acf/input/admin_enqueue_scripts', 'acf_simplemap_fix_enqueue_scripts');

}

?>
