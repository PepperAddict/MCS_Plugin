<?php

/**
 * @package M_CSHELPER
 */

/**
 * 
 * Plugin Name: Customer Service Helper
 * Plugin URI: http://localhost:8000/plugin
 * Description: This is a customer service helper tool
 * Version: 1.0.0
 * Author: Me, duh!
 * Author URI: http://localhost:8000
 * License: GPLv2
 * Text Domain: M_CSHelper-Plugin
 * 
 * 
 */

if (!function_exists('add_action')) {
    die('you don\'t belong here');
};

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}


// //activation 
function activate_mcshelper()
{
    MCS\Base\Activate::activate();
}
register_activation_hook(__FILE__,  'activate_mcshelper');

// //deactivate
function deactivate_mcshelper()
{
    MCS\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_mcshelper');




if (class_exists('MCS\\Init')) {
    MCS\Init::register_services();
}
