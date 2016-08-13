<?php

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Password_Protected_Customizer
 * @subpackage Password_Protected_Customizer/public
 * @author     Joe Hana <me@joehana.com>
 */
class Password_Protected_Customizer_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;
		
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name		= $plugin_name;
		$this->version			= $version;

        add_filter( 'password_protected_theme_file', array( $this, 'load_template' ) );

	}

	/**
	 * Get the main template file
	 *
	 * @since    1.0.0
	 */
    public function load_template() {
        return dirname( dirname( __FILE__ ) ) . '/templates/login.php';
    }
	
}
