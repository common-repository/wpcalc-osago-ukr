<?php
if ( ! defined( 'ABSPATH' ) ) exit;
    function add_osago_ukr_admin_style() {

		wp_enqueue_style( 'admin-style-osago-ukr', plugin_dir_url( __FILE__ ) . 'css/style.css');

	}
		
	function add_global_wpcalc_osago_ukr_options() {
		add_options_page('OSAGO UKR', 'OSAGO UKR', 'manage_options', 'wpcalcosagoukr','global_wpcalc_osago_ukr_options');
	}
	
	function global_wpcalc_osago_ukr_options() {	
		include_once( 'partials/display.php' );			
	}	
	add_action('admin_menu', 'add_osago_ukr_admin_style');
	add_action('admin_menu', 'add_global_wpcalc_osago_ukr_options');