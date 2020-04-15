<?php
/*
 * Plugin Name:       REST and GraphQL for WP Document Revisions
 * Description:       Adds REST routes and GraphQL for WP Document Revisions
 * Version:           1.0.0
 * Author:            Sergey Mochalov
 * Author URI:        https://kpfu.ru
 * Text Domain:       wpdr-rest-graphql
 * Domain Path:       /languages
 */


add_filter( 'register_post_type_args', 'my_post_type_args', 10, 2 );

function my_post_type_args( $args, $post_type ) {

	if ( 'document' === $post_type ) {
		$args['show_in_rest'] = true;
		// Optionally customize the rest_base or rest_controller_class
		$args['rest_base']             = 'docs';
		$args['rest_controller_class'] = 'WP_REST_Posts_Controller';
		$args['show_in_graphql'] = true;
		$args['graphql_single_name'] = 'Document';
		$args['graphql_plural_name'] = 'Documents';
	}

	return $args;
}
