<?php

$plugin = new Password_Protected_Customizer();

$baseUrl  = $plugin->get_base_url();
$loginUrl = $plugin->get_login_url();

?>

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
                <?php _e( 'Confidential', '' ); ?>
            </div>
        
        </div>
        
        <div class="body">
        
            <div class="slider">
            
                <div class="form visible">
                
                    <h5><?php _e( 'Enter Pass Code', '' ); ?></h5>
                    
                    <div class="description">
                        <p><?php _e( 'Enter your pass code to get into the restricted area', '' ); ?></p>
                    </div>

                    <form action="<?php echo $loginUrl ?>" method="post">
                    
                        <input type="password" name="password_protected_pwd" placeholder="<?php _e( 'Enter Code', '' ); ?>" />
                        <input type="hidden" name="testcookie" value="1" />
                        <input type="hidden" name="password-protected" value="login" />
                        <input type="hidden" name="redirect_to" value="<?php echo esc_attr( $_REQUEST['redirect_to'] ); ?>" />
                        
                        <!--<input type="submit" />-->
                    
                    </form>
                
                </div>
                
                <div class="info invisible">
                
                    <h5><?php _e( 'Get in touch with us', '' ); ?></h5>
                    
                    <div class="description">
                        <p><?php _e( 'Just get in touch with us to get your personal access code', '' ); ?></p>
                    </div>

                    <a href="mailto:<?php echo get_bloginfo( 'admin_email' ) ?>?subject=Access Code Request for <?php echo get_bloginfo( 'title' ) ?> - <?php echo get_bloginfo( 'description' ) ?>" class="btn btn-block btn-lg btn-ghost">
                        <span class="lnr lnr-envelope"></span> <?php echo get_bloginfo( 'admin_email' ) ?>
                    </a>

                </div>
                
            </div>
        
        </div>
        
        <div class="footer">
                            
            <a href="#more"><?php _e( 'No Code?', '' ); ?></a>
        
        </div>
    
    </div>
    

</div>
<!-- WRAPPER > END -->