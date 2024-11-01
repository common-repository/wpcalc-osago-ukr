<?php
/**
 * @link              http://wpcalc.com/plagin-kalkulyatora-osago-dlya-ukrainy/
 * @since             1.3
 * @package           Wpcalc_OSAGO_UKR
 *
 * @wordpress-plugin
 * Plugin Name:       Wpcalc OSAGO UKR
 * Plugin URI:        http://wpcalc.com/plagin-kalkulyatora-osago-dlya-ukrainy/
 * Description:       Калькулятор расчета стоимости страхового тарифа ОСАГО Украина.
 * Version:           1.3
 * Author:            Dimy4 Wpcalc
 * Author URI:        http://wpcalc.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpcalc-osago-ukr
  */

if ( ! defined( 'WPINC' ) ) {
	die;
}

	
function activate_wpcalc_osago_ukr() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/activator.php';
	
	}

function deactivate_wpcalc_osago_ukr() {	
	require_once plugin_dir_path( __FILE__ ) . 'includes/deactivator.php';
	
}

register_activation_hook( __FILE__, 'activate_wpcalc_osago_ukr' );

register_deactivation_hook( __FILE__, 'deactivate_wpcalc_osago_ukr' );

require_once plugin_dir_path( __FILE__ ) . 'admin/admin.php';

require_once plugin_dir_path( __FILE__ ) . 'public/public.php';





 







