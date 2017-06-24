<?php
/**
 * @package Attach Font-Awesome
 * @version 0.1
 */
/*
Plugin Name: Attach Font-Awesome
Plugin URI: https://github.com/afshintalebi/attach-font-awesome/
Description: Simply add font-awesome library to head tag
Author: Afshin Talebi
Version: 0.1
Author URI: http://afshintalebi.com/
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
//config data
require(plugin_dir_path(__FILE__).'/inc/data.php');
//admin functions
require(plugin_dir_path(__FILE__).'/admin.php');
//front functions
require(plugin_dir_path(__FILE__).'/front.php');

if ( is_admin() ){ 
  // admin actions
  add_action( 'admin_init', 'atchfa_register_options');
  add_action( 'admin_menu', 'atchfa_plugin_options');
  add_action('admin_enqueue_scripts','atchfa_admin_js_files'); 
} else {
  // front actions
  add_action('wp_head','atchfa_front_css_files'); 
}


?>