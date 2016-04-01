<?php
/**
 * liphamedia engine room
 *
 * @package liphamedia
 */

/**
 * Initialize all the things.
 */
 function login_css() {
wp_enqueue_style( 'login_css', get_template_directory_uri() . 'http://laptopxachtaygiare.com/wp-content/themes/liphamedia/login.css' ); // duong dan den file css moi
}
add_action('login_head', 'login_css');

require get_template_directory() . '/inc/init.php';

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woothemes/theme-customisations
 */
 
 