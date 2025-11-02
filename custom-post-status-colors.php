<?php
/**
 * Plugin Name: Custom Post Status Colors
 * Plugin URI: https://github.com/alfredo-villa/custom-post-status-colors
 * Description: The simplest WordPress plugin in the world! Customize row background colors based on post status in the WordPress backend with just one file and zero configuration.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Author: Alfredo Villa
 * Author URI: https://github.com/alfredo-villa
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: custom-post-status-colors
 * Domain Path: /languages
 *
 * This is the simplest WordPress plugin for post status colors!
 * - One single file
 * - Zero configuration
 * - Zero settings page
 * - Just activate and it works!
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add custom styles to admin head
 * 
 * Applies background colors to post rows based on their status:
 * - Draft: Light red/salmon (#FFA07A)
 * - Pending Review: Light yellow (#FFFACD)
 * - Published: Light green (#98FB98)
 * - Private: Light gray (#E0E0E0)
 *
 * @since 1.0.0
 * @return void
 */
function cpsc_add_custom_post_status_colors() {
    ?>
    <style type="text/css">
        /* Custom Post Status Colors - The simplest way to colorize your posts! */
        tr.status-draft .check-column { 
            background-color: #FFA07A; /* Light red for Draft */
        }
        tr.status-pending .check-column { 
            background-color: #FFFACD; /* Light yellow for Pending Review */
        }
        tr.status-publish .check-column { 
            background-color: #98FB98; /* Light green for Published */
        }
        tr.status-private .check-column { 
            background-color: #E0E0E0; /* Light gray for Private */
        }
    </style>
    <?php
}
add_action( 'admin_head', 'cpsc_add_custom_post_status_colors' );
