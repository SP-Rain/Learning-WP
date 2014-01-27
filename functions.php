<?php
	
// Add RSS links to <head> section
// automatic_feed_links();



// Enable sidebar widgets    
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Widgets',
		'id'   => 'sidebar-widgets',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}



// Enable custom menu
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main_menu' => 'Main top menu'
        )
    );
}





// 503
// Temp Maintenance - with http response 503 (Service Temporarily Unavailable)
// Site will be hidden from no admins.

// function wp_maintenance_mode(){
//     if(!current_user_can('edit_themes') || !is_user_logged_in()){
//         wp_die('Maintenance, please come back soon.', '503: Maintenance, please come back soon.', array('response' => '503'));
//     }
// }
// add_action('get_header', 'wp_maintenance_mode');














// ****************************** //
// SECURITY                       //
// ****************************** //

// Change the failed login message for extra WordPress Secruty
function failed_login() {
    return 'Incorrect login information.';
}
add_filter('login_errors', 'failed_login');



// Remove the WP version for extra WordPress Secruty
function remove_wp_version(){
    return '';
}
add_filter('the_generator', 'remove_wp_version');












// ****************************** //
// THEME CUSTOMIZATION            //
// ****************************** //




?>