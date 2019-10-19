<?php
/*
Plugin Name: WP G Suite Apps For Education
Plugin URI: https://github.com/techmastersystems/WP-GSuite-Education-App/
Description: A simple WordPress plugin template
Version: 1.0
Author: Junior MOISE
Author URI: http://techmasterweb.com
License: GPL2
*/
/*
Copyright 2019  Junior MOISE  (email : jumoyz@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if(!class_exists('WP_G_Suite_App'))
{
    class WP_G_Suite_App
    {
        /**
         * Construct the plugin object
         */
        public function __construct()
        {
            // register actions
        } // END public function __construct
    
        /**
         * Activate the plugin
         */
        public static function activate()
        {
            // Do nothing
        } // END public static function activate
    
        /**
         * Deactivate the plugin
         */     
        public static function deactivate()
        {
            // Do nothing
        } // END public static function deactivate
    } // END class WP_G_Suite_App
} // END if(!class_exists('WP_G_Suite_App'))
if(class_exists('WP_G_Suite_App'))
{
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('WP_G_Suite_App', 'activate'));
    register_deactivation_hook(__FILE__, array('WP_G_Suite_App', 'deactivate'));

    // instantiate the plugin class
    $wp_plugin_template = new WP_G_Suite_App ();
}
