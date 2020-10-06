<?php
/**
 * Plugin Name:Linearc Events
 * Plugin URI: https://www.linearc.biz/profile/
 * Description: This creates suscribe, unsuscribe and email verification compatibility for linearc site.
 * Version: 0.1
 * Author: Isakiye Afasha
 * Author URI: http://www.iamafasha.com
 */
// Make sure we don't expose any info if called directly

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

if ( is_admin() ) {
    new Linearc\Plugin\Events\Updater( __FILE__, 'Linearc-Inc', "wp-linearc-events" ,"0345013c4ec53e41c7523332c1c61ef2fc745a41" );
}