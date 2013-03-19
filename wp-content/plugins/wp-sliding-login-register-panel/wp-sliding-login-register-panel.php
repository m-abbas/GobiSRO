<?php
/* 
Plugin Name: WP Sliding Login | Register Panel 
Plugin URI: http://wordpress.org/extend/plugins/wp-sliding-login-register-panel/
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3JKEJ2GLMCC2A
Description: Add a sliding dropdown login & register panel to Wordpress.
Author: The Factory
Version: 2.2
Author URI: http://www.thefactoryreno.com 
*/ 

if ( !defined('WP_CONTENT_URL') ) {
    define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
}
if ( ! defined( 'WP_PLUGIN_URL' ) ) {
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
}

$wp_sliding_login_register_plugin_basename = plugin_basename(dirname(__FILE__));
$wp_sliding_login_register_plugin_url_path = WP_PLUGIN_URL.'/'.$wp_sliding_login_register_plugin_basename;
$wp_sliding_login_register_css_path = $wp_sliding_login_register_plugin_url_path. '/css/slide.css';
$wp_sliding_login_register_pngfix_js_path = $wp_sliding_login_register_plugin_url_path. '/js/pngfix/supersleight-min.js';
$wp_sliding_login_register_js_path = $wp_sliding_login_register_plugin_url_path. '/js/slide.js';


function add_wp_sliding_login_register_form() {
	?>
<!-- Panel -->
<div id="toppanel"> 
<?php 
	global $user_identity, $user_ID;	

	if (is_user_logged_in()) { 
            global $current_user;
            get_currentuserinfo ();
?>
    <!-- Logout link on top -->	
	<div class="tab">
		<ul class="login" style="width:auto;padding-right:10px;">
	        <li><small>Welcome back:</small> <a href="<?php echo site_url('/userprofile') ?>" title="You Have <?php echo $User->ISP ?> ISP"><?php echo $user_identity; ?></a></li>
            <li class="sep">|</li>
            <li><a href="<?php echo wp_logout_url(home_url()); ?>" rel="nofollow" title="<?php _e('Log out'); ?>"><?php _e('Log out'); ?></a></li>
		</ul> 
	</div> 
    <!-- / top -->
<?php
	// Else if user is not logged in, show login and register forms
	} else {
?>
    <!-- Login / Register links on top -->
	<div class="tab">
		<ul class="login" <?php if (!get_option('users_can_register')) { ?> style="width:150px;"<?php } ?>>
	    	<!-- Login / Register -->
			<li><a id="login" href="#"><small>Have an account?</small> <?php _e('Log In'); ?></a></li>
            <?php if (get_option('users_can_register')) { ?>
            <li class="sep">|</li>
            <li><a id="register" href="<?php echo site_url('/registration');?>"><?php _e('Register'); ?></a></li>
            <?php } ?>
		</ul>
	</div>
    <!-- / top -->
<?php } ?>
</div>
<!--END panel -->
<!-- Login Form -->
<div id="loginpanel" <?php if (get_option('users_can_register')) { ?>style="display:none;"<?php }else{ ?>style="display:none;right:0;"<?php } ?>>
	<div class="content">
				<form class="clearfix" action="<?php echo site_url('login') ?>" method="post">
					<label class="grey" for="user_login"><?php _e('Login Name') ?>:</label>
					<input class="field" type="text" name="user_login" id="user_login" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" size="23" />
					<label class="grey" for="user_password"><?php _e('Password:') ?></label>
					<input class="field" type="password" name="user_password" id="user_password" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" />&nbsp;<?php _e('Remember Me') ?></label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>"/>
					<a class="lost-pwd" href="<?php echo site_url('wp-login.php?action=lostpassword') ?>"><?php _e('Lost Password') ?></a>
				</form>
	</div>
</div>
<!-- /login -->
<?php if (get_option('users_can_register')) { ?>
<!-- Register Form -->
<div id="registerpanel" style="display:none;">
	<div class="content">
				<form name="registerform" id="registerform" class="clearfix" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post">
					<label class="grey" for="user_login"><?php _e('Username') ?>:</label>
					<input class="field" type="text" name="user_login" id="user_login" value="<?php echo attribute_escape(stripslashes($user_login)); ?>" size="20" tabindex="10" />
					<label class="grey" for="user_email"><?php _e('E-mail') ?>:</label>
					<input class="field" type="text" name="user_email" id="user_email" value="<?php echo attribute_escape(stripslashes($user_email)); ?>" size="25" tabindex="20" />
					<div class="clear"></div>
					<?php do_action('register_form'); ?>
					<label id="reg_passmail"><?php _e('A password will be e-mailed to you.') ?></label>
					<input type="submit" name="wp-submit" id="wp-submit" value="<?php _e('Register'); ?>" class="bt_register" />
				</form>
	</div>
</div>
<!-- END Register Form -->
<?php } ?>
<?php
}

function add_wp_sliding_login_register_form_css() {
	global $wp_sliding_login_register_css_path;
        wp_enqueue_style('slide.css',$wp_sliding_login_register_css_path);
}

function add_jquery_js() {
    wp_enqueue_script('jquery');
}

function add_wp_sliding_login_register_form_pngfix_js() {
	global $wp_sliding_login_register_pngfix_js_path;
        wp_enqueue_script('pngfix', $wp_sliding_login_register_pngfix_js_path);
}

function add_wp_sliding_login_register_form_js() {
	global $wp_sliding_login_register_js_path;
        wp_enqueue_script('slide.js', $wp_sliding_login_register_js_path);
}
 
add_action('wp_print_styles', add_wp_sliding_login_register_form_css);
add_action('wp_print_scripts', add_jquery_js);

add_action('wp_print_scripts', add_wp_sliding_login_register_form_js);
add_action('wp_footer', add_wp_sliding_login_register_form);

?>