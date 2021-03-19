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
    public $pages = array();
    public $subpages = array();

    public function __construct()
    {
        $this->settings = new SettingsApi();
        $this->pages = [
            [
                'page_title' => 'Customer Service Helper',
                'menu_title' => 'CS Helper',
                'capability' => 'manage_options',
                'menu_slug' => 'mcshelper_plugin',
                'callback' => function () {
                    echo '<h1>hello there</h1>';
                },
                'icon_url' => 'dashicons-store',
                'position' => 110

            ]
        ];
        $this->subpages = [
            [
                'parent_slug' => 'mcshelper_plugin',
                'page_title' => 'Enter Token',
                'menu_title' => 'enter_token',
                'capability' => 'manage_options',
                'menu_slug' => 'mcs_token',
                'callback' => function () {
                    echo '<h1>Enter Token</h1>';
                },
            ],
            [
                'parent_slug' => 'mcshelper_plugin',
                'page_title' => 'Custom Taxonomies',
                'menu_title' => 'mcs_axonomies',
                'capability' => 'manage_options',
                'menu_slug' => 'mcs_taxonomies',
                'callback' => function () {
                    echo '<h1>Taxonomies</h1>';
                },
            ],
            [
                'parent_slug' => 'mcshelper_plugin',
                'page_title' => 'Widget',
                'menu_title' => 'mcs_widget',
                'capability' => 'manage_options',
                'menu_slug' => 'mcs_token',
                'callback' => function () {
                    echo '<h1>Widget</h1>';
                },
            ]
        ];
    }
    public function register()
    {

        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }
}
