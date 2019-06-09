<?php

//Set theme up
if ( ! function_exists( 'bplate_setup' ) ) :

    function bplate_setup() {
        //Let WordPress handle the title tag
        add_theme_support( 'title-tag' );

        //Add a navigation menu
        register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'bplate' ),
		) );
    }

endif;
add_action( 'after_setup_theme', 'bplate_setup' );

/**
 * Modify url base from wp-json to 'api'
 */
add_filter( 'rest_url_prefix', 'api_slug');
 
function api_slug( $slug ) {
    return 'api';
}

// Require API functions and actions files
require_once('api-functions.php');
require_once('api-actions.php');
?>