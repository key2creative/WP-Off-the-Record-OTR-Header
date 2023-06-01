<?php
/**
 * Plugin Name: Key2 Wordpress Off the Record (OTR) Header
 * Description: Enable OTR to ask supporting browsers to offer private, "off the record", browsing. See <a href="https://brave.com/privacy-updates/26-request-off-the-record/">https://brave.com/privacy-updates/26-request-off-the-record/</a>
 * Author: key2creative
 * Author URI: https://key2creative.com.au
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class Wp_Otr_Header {


	/**
	 * Constructor function
	 *
	 * @return void
	 */
	public function __construct() {
		add_action( 'send_headers', array( $this, 'add_otr_header' ) );
	}

	public function add_otr_header() {
		header( 'Request-OTR: 1' );
	}


} // Class

if( !is_admin() )
	new Wp_Otr_Header();