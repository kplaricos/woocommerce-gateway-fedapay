<?php
/**
 * Plugin Name:     Woocommerce Gateway Fedapay
  * Plugin URI: https://wordpress.org/plugins/woocommerce-gateway-fedapay/
 * Description: Take credit card payments on your store using Fedapay.
 * Author: Fedapay
 * Author URI: https://fedapay.com/
 * Requires at least: 4.4
 * Tested up to: 4.9
 * WC requires at least: 2.6
 * WC tested up to: 3.3
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     woocommerce-gateway-fedapay

 * Domain Path:     /languages
 * Version:         0.1.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
 	exit;
 }

 // Load the plugin.
 require plugin_dir_path( __FILE__ ) . 'includes/class-wc-fedapay.php';

