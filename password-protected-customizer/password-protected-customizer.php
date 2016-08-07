<?php

/**
 *
 * Plugin Name: 			Password Protected - Customizer
 * Plugin URI: 				http://joehana.com
 *
 * Description: 			Customizer for the Password Protected Plugin
 * Version: 				1.0.0
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
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-password-protected-customizer-activator.php';
	Password_Protected_Customizer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-password-protected-customizer-deactivator.php';
	Password_Protected_Customizer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_password_protected_customizer' );
register_deactivation_hook( __FILE__, 'deactivate_password_protected_customizer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-password-protected-customizer.php';

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