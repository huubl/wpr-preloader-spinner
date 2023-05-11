<?php

/**
 * Plugin Name: WPR Loader
 * Description: A preloader plugin for webplover.com
 * Version: 1.1.3
 * Author: WebPlover
 */

defined('ABSPATH') || exit;



define('WPR_LOADER_VERSION', '1.1.3');


add_action('wp_body_open', function () {
?>
  <div id="wpr-overlay">
    <div id="wpr-loader"></div>
  </div>
<?php
});


// Add preloader html after body start tag
add_action('wp_enqueue_scripts', function () {

  wp_enqueue_style('wpr-loader', plugin_dir_url(__FILE__) . 'assets/wpr-loader-styles.css', [], WPR_LOADER_VERSION);

  wp_enqueue_script('wpr-loader', plugin_dir_url(__FILE__) . 'assets/wpr-loader-scripts.js', [], WPR_LOADER_VERSION, true);
});
