<?php
/**
 * Plugin Name: Linearc Events
 * Plugin URI: https://www.linearc.biz/profile/
 * Description: This creates suscribe, unsuscribe and email verification compatibility for linearc site.
 * Version: 1.3
 * Author: Isakiye Afasha
 * Author URI: http://www.iamafasha.com
 * GitHub Plugin URI: https://github.com/Linearc-Inc/wp-linearc-events
 */

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

function linearc_events_plugin_dir_path(){
  return plugin_dir_path(__FILE__);
}

function linearc_events_plugin_dir_url(){
  return plugin_dir_url( __FILE__ );
}

require_once plugin_dir_path( __FILE__ ).'/classes/Updater.php';
require_once plugin_dir_path( __FILE__ ).'/inc/custom-post-type-events.php';
require_once plugin_dir_path( __FILE__ ).'/inc/shortcodes.php';

if ( is_admin() ) {
 //   new Linearc\Plugin\Events\Updater( __FILE__, 'Linearc-Inc', "wp-linearc-events");
}