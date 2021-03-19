<?php

/**
 * @package M_CSHELPER
 */

namespace MCS\Pages;

use \MCS\Api\SettingsApi;
use \MCS\Api\Callbacks\AdminCallbacks;
use \MCS\Base\BaseController;
class Admin extends BaseController
{
    public $settings;
    public $callbacks;   
    public $pages = array();
    public $subpages = array();


    public function register()
    {
        $this->settings = new SettingsApi();
        $this->callbacks = new AdminCallbacks();
        $this->setPages();
        $this->setSubPages();

        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }

    public function setPages() {
        $this->pages = [
            [
                'page_title' => 'Customer Service Helper',
                'menu_title' => 'CS Helper',
                'capability' => 'manage_options',
                'menu_slug' => 'mcshelper_plugin',
                'callback' => array($this->callbacks, 'adminDashboard'),
                'icon_url' => 'dashicons-store',
                'position' => 110

            ]
        ];

    }

    public function setSubPages() {
        $this->subpages = [
            [
                'parent_slug' => 'mcshelper_plugin',
                'page_title' => 'Enter Token',
                'menu_title' => 'enter_token',
                'capability' => 'manage_options',
                'menu_slug' => 'mcs_token',
                'callback' => array($this->callbacks, 'tokenDashboard'),
            ],
            [
                'parent_slug' => 'mcshelper_plugin',
                'page_title' => 'Custom Taxonomies',
                'menu_title' => 'mcs_axonomies',
                'capability' => 'manage_options',
                'menu_slug' => 'mcs_taxonomies',
                'callback' => array($this->callbacks, 'taxonomyDashboard'),
            ],
            [
                'parent_slug' => 'mcshelper_plugin',
                'page_title' => 'Widget',
                'menu_title' => 'mcs_widget',
                'capability' => 'manage_options',
                'menu_slug' => 'mcs_widget',
                'callback' => array($this->callbacks, 'widgetDashboard'),
            ]
        ];
    }
}
