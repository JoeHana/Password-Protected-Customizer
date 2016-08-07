<?php

$plugin = new Password_Protected_Customizer();

$baseUrl  = $plugin->get_base_url();
$loginUrl = $plugin->get_login_url();

?>

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
    
        <!-- OVERLAY > START -->
        <div id="intro" class="intro">
            <div class="intro-loader intro-loader-bar"></div>
        </div>
        <!-- OVERLAY > END -->
        
        <!-- WRAPPER > START -->
        <div class="wrapper">
        
            <div class="box">
                
                <div class="header">
                            
                    <div id="logo" class="logo">
                    
						<?php
                        if( current_theme_supports( 'custom-logo' ) ) {
                            
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            
                            if( $custom_logo_id ) {
                                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                $image = $image[0];
                            } else {
                                $image = '';
                            }
                            
                        }
                        ?>
                    
                        <?php if( $image ) { ?>
                            <img src="<?php echo $image ?>" alt="" width="100" height="100" />
                        <?php } ?>
                        
                        <h4><?php echo get_bloginfo( 'title' ) ?></h4>
                        <small><?php echo get_bloginfo( 'description' ) ?></small>
                        
                    </div>                
                
                    <div class="badge">
                        <?php _e( 'Confidential', 'password-protected-customizer' ); ?>
                    </div>
                
                </div>
                
                <div class="body">
                
                    
                    <div class="slider">
                    
                        <div class="form visible">
                        
                            <h5><?php _e( 'Enter Pass Code', 'password-protected-customizer' ); ?></h5>
                            
                            <div class="description">
                                <p><?php _e( 'Enter your pass code to get into the restricted area', 'password-protected-customizer' ); ?></p>
                            </div>
        
                            <form action="<?php echo $loginUrl ?>" method="post">
                            
                                <input type="password" name="password_protected_pwd" placeholder="<?php _e( 'Enter Code', 'password-protected-customizer' ); ?>" />
                                <input type="hidden" name="testcookie" value="1" />
                                <input type="hidden" name="password-protected" value="login" />
                                <input type="hidden" name="redirect_to" value="<?php echo esc_attr( $_REQUEST['redirect_to'] ); ?>" />
                                
                                <!--<input type="submit" />-->
                            
                            </form>
                        
                        </div>
                        
                        <div class="info invisible">
                        
                            <h5><?php _e( 'Get in touch with us', 'password-protected-customizer' ); ?></h5>
                            
                            <div class="description">
                                <p><?php _e( 'Just get in touch with us to get your personal access code', 'password-protected-customizer' ); ?></p>
                            </div>
        
                            <a href="mailto:<?php echo get_bloginfo( 'admin_email' ) ?>?subject=Access Code Request for <?php echo get_bloginfo( 'title' ) ?> - <?php echo get_bloginfo( 'description' ) ?>" class="btn btn-block btn-lg btn-ghost">
                                <span class="lnr lnr-envelope"></span> <?php echo get_bloginfo( 'admin_email' ) ?>
                            </a>
        
                        </div>
                        
                    </div>
                
                </div>
                
                <div class="footer">
                                    
                    <a href="#more"><?php _e( 'No Code?', 'password-protected-customizer' ); ?></a>
                
                </div>
            
            </div>
            
        
        </div>
        <!-- WRAPPER > END -->

		<?php
		
//		$template_loader = new Password_Protected_Customizer_Template_Loader;
//		$template_loader->get_template_part( 'content' );
		
		?>    	
        
    </body>
    
</html>