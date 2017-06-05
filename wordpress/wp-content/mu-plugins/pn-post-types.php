<?php
/*
Plugin Name: ProspectNow - Post Types
Description: Registers the Team, FAQ, and Career Post Types
Plugin URI: http://prospectnow.com
Author: Joel Lopez
Author URI: http://typefasterjoel.com
License: GPL22
 */
 
define( 'PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Require Team Post Type
require_once PLUGIN_DIR . 'pn-post-types/pn-team-cpt.php';

// Require FAQ Post Type
require_once PLUGIN_DIR . 'pn-post-types/pn-faq-cpt.php';

// Require Career Post Type
require_once PLUGIN_DIR . 'pn-post-types/pn-career-cpt.php';