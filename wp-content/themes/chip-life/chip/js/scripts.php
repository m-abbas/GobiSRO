<?php
/** Chip Life Register Scripts */
add_action( 'chip_life_setup', 'chip_life_register_scripts' );
function chip_life_register_scripts() {
	wp_register_script( 'chip_life_script_hoverintent', CHIP_LIFE_CHIP_URL . '/js/hoverintent.min.js', array( 'jquery' ), '5' );
	wp_register_script( 'chip_life_script_superfish', CHIP_LIFE_CHIP_URL . '/js/superfish.min.js', array( 'jquery' ), '1.4.8' );
	wp_register_script( 'chip_life_script_supersubs', CHIP_LIFE_CHIP_URL . '/js/supersubs.min.js', array( 'jquery' ), '0.2' );
        wp_register_script('jquery_main_script', CHIP_LIFE_CHIP_URL . '/js/jquery.js', array( 'jquery' ), '1.9.1');
        wp_register_script('jQuery_Password_validation', CHIP_LIFE_CHIP_URL . '/js/jquery.validate.js', array( 'jquery' ), '1.5.2');
        wp_register_script('password_meter_validation', CHIP_LIFE_CHIP_URL . '/js/jquery.validate.password.js', array( 'jquery' ), '1.0');
}

/** Chip Life Enqueue Scripts */
add_action( 'wp_print_styles', 'chip_life_print_scripts' );
function chip_life_print_scripts() {		
	
	wp_enqueue_script( 'jquery' );
	if( is_singular() ) { 
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'chip_life_script_hoverintent' );
	wp_enqueue_script( 'chip_life_script_superfish' );
	wp_enqueue_script( 'chip_life_script_supersubs' );
        wp_enqueue_script( 'jquery_main_script' );
        wp_enqueue_script( 'jQuery_Password_validation' );
        wp_enqueue_script( 'password_meter_validation' );
        
	
}

/** Chip Life JS Logic */
add_action( 'chip_life_wrap_after', 'chip_life_js_logic_init' );
function chip_life_js_logic_init() {
?>
<script language="javascript" type="text/javascript">
jQuery(document).ready(function($) {
	
  $( '.menu1 ul,.menu2 ul' ).supersubs( {   	
	
	minWidth: 12,
  	maxWidth: 15,
  	extraWidth: 1
  
  } ).superfish({
  	
	delay: 100,
	speed: 'fast',
	animation: { opacity:'show', height:'show' }
  
  });
  <!-- end .menu's -->
	
});
</script>
<?php
}

/** Chip Life Analytic Code */
add_action( 'chip_life_wrap_after', 'chip_life_analytic_init' );
function chip_life_analytic_init() {
	
	$chip_life_options = get_chip_life_options();	
	if( $chip_life_options['chip_life_analytic'] == 1 )	 {	
		echo htmlspecialchars_decode( $chip_life_options['chip_life_analytic_code'] );
		echo '<!-- end .analytic-code -->';	
	}

}
?>