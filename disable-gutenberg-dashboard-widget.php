<?php
/**
 * Plugin Name: Disable Gutenberg Dashboard Widget
 * Plugin URI: https://github.com/lukecav/disable-gutenberg-dashboard
 * Description: Printing since 1850. Disable the 'try Gutenberg' dashboard widget from showing in WordPress 4.9.7.
 * Version:     1.0.0
 * Author:      Luke Cavanagh
 * Author URI:  https://github.com/lukecav
 * License:     MIT
 * License URI: https://opensource.org/licenses/MIT
 * Text Domain: disable-gutenberg-dashboard-widget
 * Domain Path: /languages
 */
 
 remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );
