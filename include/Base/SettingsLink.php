<?php

/**
 * @package M_CSHELPER
 */

 namespace MCS\Base;
 use \MCS\Base\BaseController;

 class SettingsLink extends BaseController {

     public function register() {
        add_filter("plugin_action_links_" . $this->plugin_name, array($this, 'settings_link'));
         flush_rewrite_rules();
         
     }

     public function settings_link($links)
     {
         $settings_link = '<a href="admin.php?page=mcshelper_plugin">Settings</a>';
         array_push($links, $settings_link);
         return $links;
     }
 }