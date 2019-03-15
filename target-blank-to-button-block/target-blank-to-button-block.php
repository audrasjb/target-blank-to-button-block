<?php
/**
Plugin Name: Target Blank to Button Block
Plugin URI: https://jeanbaptisteaudras.com/2019/03/ajout-du-target-blank-sur-les-liens-du-bloc-bouton-de-lediteur-gutenberg-de-wordpress/
Description: Add Target Blank to Gutenberg Button Block. Provisory fix to add target blank to button blocks.
Author: Jb Audras
Version: 0.1
Author URI: https://jeanbaptisteaudras.com/
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain: target-blank-to-button-block
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Admin
 */
if ( is_admin() ) {
	require_once plugin_dir_path( __FILE__ ) . '/admin/tbtbb-admin.php';
}

/**
 * Public
 */
require_once plugin_dir_path( __FILE__ ) . '/public/tbtbb-public.php';
