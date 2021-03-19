<?php

/**
 * @package M_CSHELPER
 */

namespace MCS\Pages;
use \MCS\Base\BaseController;
use \MCS\Api\SettingsApi;

class Admin extends BaseController
{
    public $settings;

    public function __construct() {
        $this->settings = new SettingsApi();
    }
    public function register()
    {
        $pages = [
            [
            'page_title' => 'Customer Service Helper',
            'menu_title' => 'CS Helper',
            'capability' => 'manage_options',
            'menu_slug' => 'mcshelper_plugin',
            'callback' => function() { echo '<h1>hello there</h1>';},
            'icon_url' => 'dashicons-store',
            'position' => 110

        ]
    ];
        $this->settings->addPages($pages)->register();
        
    }


}
