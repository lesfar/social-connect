<?php

function sc_add_stylesheets(){
	if( !wp_style_is( 'social_connect', 'registered' ) ) {
		wp_register_style( "social_connect", SOCIAL_CONNECT_PLUGIN_URL . "/media/css/style.css" );
		wp_register_style( "jquery-ui", 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/themes/smoothness/jquery-ui.css' );
	}

	if ( did_action( 'wp_print_styles' ) ) {
		wp_print_styles( 'social_connect' );
		wp_print_styles( 'jquery-ui' );
	} else {
		wp_enqueue_style( "social_connect" );
		wp_enqueue_style( "jquery-ui" );
	}
}
add_action( 'login_head', 'sc_add_stylesheets' );
add_action( 'wp_head', 'sc_add_stylesheets' );


function sc_add_admin_stylesheets(){
	if( !wp_style_is( 'social_connect', 'registered' ) ) {
		wp_register_style( "social_connect", SOCIAL_CONNECT_PLUGIN_URL . "/media/css/style.css" );
	}

	if ( did_action( 'wp_print_styles' )) {
		wp_print_styles( 'social_connect' );
	} else {
		wp_enqueue_style( "social_connect" );
	}
}
add_action( 'admin_print_styles', 'sc_add_admin_stylesheets' );


function sc_add_javascripts(){

	if( ! wp_script_is( 'social_connect', 'registered' ) )
		wp_register_script( 'social_connect', SOCIAL_CONNECT_PLUGIN_URL . '/media/js/connect.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-dialog' ) );

	wp_enqueue_script( 'social_connect' );
}
add_action( 'login_head',         'sc_add_javascripts' );
add_action( 'wp_enqueue_scripts', 'sc_add_javascripts' );
