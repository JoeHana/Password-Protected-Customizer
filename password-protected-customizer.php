<?php

/**
 *
 * Plugin Name: 			Password Protected - Customizer
 * Plugin URI: 				http://joehana.com
 *
 * Description: 			Customizer for the Password Protected Plugin
 * Version: 				1.1.0
 *
 * Author:					Joe Hana
 * Author URI: 				http://joehana.com
 * Author Email: 			me@joehana.com
 *
 * License:					GPL-2.0+
 * License URI:				http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Text Domain: 			password-protected-customizer
 * Domain Path: 			/password-protected-customizer/language
 *
 * Github Plugin URI:		joehana/password-protected-customizer
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( 'PPC_PATH' ) )
	define( 'PPC_PATH', plugin_dir_path( __FILE__ ) );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PPC_PATH . 'includes/class-password-protected-customizer.php';

/**
 * Load Gamajo Template Loader Class
 */
if ( ! class_exists( 'Gamajo_Template_Loader' ) )
	require PPC_PATH . 'vendor/gamajo-template-loader/class-gamajo-template-loader.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_password_protected_customizer() {

	$plugin = new Password_Protected_Customizer();
	$plugin->run();

}

run_password_protected_customizer();