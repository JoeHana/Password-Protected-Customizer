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

		$this->plugin_name = $plugin_name;
		$this->version = $version;

        add_filter( 'password_protected_theme_file', array( $this, 'get_template' ) );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		 
		wp_enqueue_style( 'open-sans',			'//fonts.googleapis.com/css?family=Open+Sans:400,300',										false, false,				'all' );
		
		wp_enqueue_style( 'bootstrap',			'//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/css/bootstrap.min.css',	false, '4.0.0-alpha.3',		'all' );
		wp_enqueue_style( 'animate',			'//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css',						false, '3.5.2',				'all' );
		wp_enqueue_style( 'ionicons',			'//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',						false, '2.0.1',				'all' );

		wp_enqueue_style( $this->plugin_name,	plugin_dir_url( __FILE__ ) . 'css/password-protected-customizer-public.css',				array(), $this->version,	'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 'jquery' );

        wp_enqueue_script( $this->plugin_name,	plugin_dir_url( __FILE__ ) . 'js/password-protected-customizer-public.js', array( 'jquery' ), $this->version, false );

	}
	
	/**
	 * Get the main template file
	 *
	 * @since    1.0.0
	 */
    public function get_template() {
        return dirname( dirname( __FILE__ ) ) . '/templates/login.php';
    }
	
}
