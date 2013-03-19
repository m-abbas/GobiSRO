<?php

/** Chip Life Register Styles */
add_action('chip_life_setup', 'chip_life_register_styles');

function chip_life_register_styles() {
    /** Use "wp_register_style" to register a stylesheet */
    //wp_register_style('jQuery_Password_validation', CHIP_LIFE_CHIP_URL . '/css/jquery.validate.password.css');
    wp_register_style('Additional_Styles', CHIP_LIFE_CHIP_URL . '/css/additions.css');
}

/** Chip Life Enqueue Styles */
add_action('wp_print_styles', 'chip_life_print_styles');

function chip_life_print_styles() {
    /** Use "wp_enqueue_style" to print a stylesheet */
    //wp_enqueue_style('jQuery_Password_validation');
    wp_enqueue_style('Additional_Styles');
}

?>