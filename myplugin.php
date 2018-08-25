<?php
/*
Plugin Name: myplugin
Plugin URI: https://google.com/
Description: Used by millions, myplugin
Version: 1.0.0
Author: kosala
Author URI: https://google.com
License: GPLv2 or later
Text Domain: myplugin
*/

if(! defined('ABSPATH')) {
    exit;
}

//if admin area
if(is_admin()) {
    //include dependencies
    require_once plugin_dir_path(__FILE__).'admin/admin-menu.php';
    require_once plugin_dir_path(__FILE__).'admin/settings-page.php';
    require_once plugin_dir_path(__FILE__).'admin/settings-register.php';
    require_once plugin_dir_path(__FILE__).'admin/settings-callbacks.php';
}