<?php

/**
 * @package M_CSHELPER
 */

namespace MCS\Api\Callbacks;
use MCS\Base\BaseController;


class AdminCallbacks extends BaseController {

    public function adminDashboard() {
        return require_once("$this->plugin_path/admin_template/index.php");
    }
    public function tokenDashboard() {
        return require_once("$this->plugin_path/admin_template/token.php");
    }
    public function taxonomyDashboard() {
        return require_once("$this->plugin_path/admin_template/taxonomy.php");
    }
    public function widgetDashboard() {
        return require_once("$this->plugin_path/admin_template/widget.php");
    }

}
