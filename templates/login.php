<!DOCTYPE html>

    <head>
    
        <title><?php echo get_bloginfo( 'title' ) ?> - <?php echo get_bloginfo( 'description' ) ?></title>
        
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        
        <?php
        /**
		 * Enqueue scripts and styles for the login page.
		 *
		 * @since 3.1.0
		 */
		do_action( 'login_enqueue_scripts' );
	
		/**
		 * Fires in the login page header after scripts are enqueued.
		 *
		 * @since 2.1.0
		 */
		do_action( 'login_head' );
		?>
        
    </head>
    
    <body>
    
		<?php
        /**
         * Include Main Template File
         */
        
        // Instantiate Main Class
        $plugin = new Password_Protected_Customizer();
        
        // Set Vars
        $login_url = $plugin->get_login_url();
        
        // Create Data Array
        $data = array(
            'login_url'	=> $login_url	
        );
        
        // Load Template
        $template = new Password_Protected_Customizer_Template_Loader;
        $template->set_template_data( $data );
        $template->get_template_part( 'login-form' );
        ?>
        
    </body> 
       
</html>