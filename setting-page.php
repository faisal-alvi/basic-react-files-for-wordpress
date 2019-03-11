<?php
/**
 * WordPress Setting Page for a React.
 *
 * @package WordPress
 * @since 1.0.0
 */

//_____________________Combining ReactJS & WordPress


// Action to add menu in settings page.
add_action( 'admin_menu', 'wpreact_admin_menu' );

/**
 * Function to add new menu in settings
 *
 * @since   1.0.0
 */
function wpreact_admin_menu() {
	add_options_page(
		__( 'React Page', 'wpreact' ),
		__( 'React Page', 'wpreact' ),
		'manage_options',
		'wpreact-page',
		'display_wpreact_admin_page'
	);
}

/**
 * Callback function of Setting Page
 *
 * @since    1.0.0
 */
function display_wpreact_admin_page() {
	?>
	<h1>Welcome..!</h1><br />
        <div id="root" style="border: 1px solid red; padding : 25px; width: 800px;">This is 'root' div.</div>
	<?php
}

// Action to add scripts to admin side.
add_action( 'admin_enqueue_scripts', 'wpreact_enqueue_admin_scripts' );

/**
 * Function to add the scripts and styles to admin page.
 *
 * @since 1.0.0
 */
function wpreact_enqueue_admin_scripts() {
	wp_enqueue_script( 'wpreact-script', get_stylesheet_directory_uri() . '/dist/bundle.js', array(
		'jquery',
		'wp-element'
	), '1.0.1' );
}

