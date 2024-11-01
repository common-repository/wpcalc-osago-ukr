<?php
if ( ! defined( 'ABSPATH' ) ) exit;
	function shortcode_osago_ukr_calc() {		
				
		wp_enqueue_script( 'wpcalc-osago-ukr-calc', plugins_url( 'js/calc.js', __FILE__ ));
		wp_localize_script( 'wpcalc-osago-ukr-calc', 'wpcalc_osago_Ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
		wp_enqueue_style ( 'wpcalc-osago-ukr-style', plugins_url( 'css/style.css', __FILE__ ));		
		ob_start();
		include_once( 'partials/page-calc.php' );		
		$output_string=ob_get_contents();
		ob_end_clean();  
		return $output_string;
		
		}
	
	add_shortcode( 'wpcosagoukr', 'shortcode_osago_ukr_calc' );
