<?php

/**
 * Template Loader Class.
 *
 * This is used to load templates and make template overrides through theme or other plugins possible.
 *
 * @since      1.0.0
 * @package    Password_Protected_Customizer
 * @subpackage Password_Protected_Customizer/includes
 * @author     Joe Hana <me@joehana.com>
 */

if ( ! class_exists( 'Password_Protected_Customizer_Template_Loader' ) ) {

	/**
	 * Template loader.
	 *
	 * Originally based on functions in Easy Digital Downloads (thanks Pippin!).
	 *
	 * When using in a plugin, create a new class that extends this one and just overrides the properties.
	 *
	 * @package Template_Loader
	 * @author  Gary Jones
	 */
	class Password_Protected_Customizer_Template_Loader extends Gamajo_Template_Loader {
		
		/**
		* Prefix for filter names.
		*
		* @since 1.0.0
		*
		* @var string
		*/
		protected $filter_prefix = 'password_protected';
		
		/**
		* Directory name where custom templates for this plugin should be found in the theme.
		*
		* @since 1.0.0
		*
		* @var string
		*/
		protected $theme_template_directory = 'template-parts/password-protected';
		
		/**
		* Reference to the root directory path of this plugin.
		*
		* Can either be a defined constant, or a relative reference from where the subclass lives.
		*
		* In this case, `MEAL_PLANNER_PLUGIN_DIR` would be defined in the root plugin file as:
		*
		* ~~~
		* define( 'MEAL_PLANNER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
		* ~~~
		*
		* @since 1.0.0
		*
		* @var string
		*/
		protected $plugin_directory = PPC_PATH;
		
		/**
		* Directory name where templates are found in this plugin.
		*
		* Can either be a defined constant, or a relative reference from where the subclass lives.
		*
		* e.g. 'templates' or 'includes/templates', etc.
		*
		* @since 1.1.0
		*
		* @var string
		*/
		protected $plugin_template_directory = 'templates';
		
	}

}