<?php

/**
 * @package M_CSHELPER
 */

namespace MCS\Pages;
use \MCS\Base\BaseController;

class Admin extends BaseController
{

    public function register()
    {
        add_action('admin_menu', array($this, 'add_admin_pages'));
        
    }

    public function add_admin_pages()
    {
        add_menu_page('CSHELPER', 'Customer Service Helper', 'manage_options', 'mcshelper_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
    }
    public function admin_index()
    {
        require_once $this->plugin_path . 'admin_template/index.php';
    }


}
