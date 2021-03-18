<?php

/**
 * @package M_CSHELPER
 */

 namespace MCS\Base;

 class Deactivate {
     public static function deactivate() {
         flush_rewrite_rules();
         
     }
 }