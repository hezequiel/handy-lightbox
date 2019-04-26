<?php

/**
 * Plugin Name: Handy Lightbox
 * Plugin URI: @TODO
 * Description: Adds a lightbox functionality to your website
 * Version: 0.5.0
 * Author: Khushi Ananda
 * Author URI: https://khushiananda.com
 * License: GPL2
 * Text Domain: handy-lightbox
 * Domain Path: /languages
 */

define( 'KHA_LIGHTBOX_VERSION', '0.5.0' );
define( 'KHA_LIGHTBOX_PATH', dirname(__FILE__) );
define( 'KHA_LIGHTBOX_MODULES_PATH', KHA_LIGHTBOX_PATH . '/modules' );
define( 'KHA_LIGHTBOX_URL', plugins_url( 'sticky-admin-menu', dirname(__FILE__) ) );
define( 'KHA_LIGHTBOX_ACTIVE', true );


require_once KHA_LIGHTBOX_PATH . '/functions/lightbox.php';
require_once KHA_LIGHTBOX_PATH . '/functions/enqueue.php';

require_once KHA_LIGHTBOX_PATH . '/functions/kha-utilities.php';