<form action="<?php echo $data->login_url ?>" method="post">

    <input type="password" name="password_protected_pwd" placeholder="<?php _e( 'Enter Code', 'password-protected-customizer' ); ?>" />
    <input type="hidden" name="password-protected" value="login" />
    <input type="hidden" name="redirect_to" value="<?php echo esc_attr( $_REQUEST['redirect_to'] ); ?>" />
    
    <input type="submit" value="<?php _e( 'Submit', 'password-protected-customizer' ); ?>" />

</form>