<?php
/*
Plugin Name: Instapage Plugin
Description: The best way for WordPress to seamlessly publish landing pages as a natural extension of your website.
Version: 3.1.2
Plugin URI: https://instapage.com/
Author: Instapage
Author URI: https://instapage.com/
License: GPLv2
*/

define( 'INSTAPAGE_PLUGIN_PATH', dirname( __FILE__ ) );
define( 'INSTAPAGE_PLUGIN_FILE', __FILE__ );

if( !defined( 'INSTAPAGE_ENTERPRISE_ENDPOINT' ) )
{
  define( 'INSTAPAGE_ENTERPRISE_ENDPOINT', 'http://pageserve.co' );
}

if( !defined( 'INSTAPAGE_PROXY_ENDPOINT' ) )
{
  define( 'INSTAPAGE_PROXY_ENDPOINT', 'http://app.instapage.com' );
}

if( !defined( 'INSTAPAGE_APP_ENDPOINT' ) )
{
  define( 'INSTAPAGE_APP_ENDPOINT', 'http://app.instapage.com/api/plugin' );
}

define( 'INSTAPAGE_SUPPORT_EMAIL', 'help@instapage.com' );

require_once( INSTAPAGE_PLUGIN_PATH . '/connectors/Connector.php' );
require_once( INSTAPAGE_PLUGIN_PATH . '/InstapageHelper.php' );
require_once( INSTAPAGE_PLUGIN_PATH . '/models/DBModel.php' );
require_once( INSTAPAGE_PLUGIN_PATH . '/models/APIModel.php' );
require_once( INSTAPAGE_PLUGIN_PATH . '/models/PageModel.php' );
require_once( INSTAPAGE_PLUGIN_PATH . '/models/ServicesModel.php' );
require_once( INSTAPAGE_PLUGIN_PATH . '/models/DebugLogModel.php' );
require_once( INSTAPAGE_PLUGIN_PATH . '/models/ViewModel.php' );
require_once( INSTAPAGE_PLUGIN_PATH . '/models/SubaccountModel.php' );
require_once( INSTAPAGE_PLUGIN_PATH . '/AjaxController.php' );

Connector::initPlugin();
