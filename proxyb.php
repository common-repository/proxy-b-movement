<?php
/**
 * Plugin Name: Proxy B Movement
 * Plugin URI: http://www.proxyb.org
 * Description: When someone uses a web proxy to browse your website or blog, Proxy B Movement informs the visitor to get another proxy i.e. Hepatitis B vaccination. Install the plugin to join the proxy war against Hepatitis B.
 * Version: 1.2
 * Author: Rupesh Mandal, Rajinder Deol
 * Author URI: http://www.proxyb.org
 * Contributors: rupesh-mandal ( https://www.proxyb.org )
 * License: GNU General Public License, version 2 (GPL-2.0)
 *License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Add script file to the footer of all calls
 */
 
add_action( 'wp_footer', 'handle_proxyb' );

function handle_proxyb() {
	require_once( 'js/proxyb.php' );
	wp_enqueue_script( 'checkProxy', plugins_url( '/js/proxyb.js', __FILE__ ) );	
}

?>