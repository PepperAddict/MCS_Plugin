<?php

/**
 * @package M_CSHELPER
 */

 namespace MCS\Base;

 class Activate {
     public static function activate() {
         flush_rewrite_rules();
         
     }
 }