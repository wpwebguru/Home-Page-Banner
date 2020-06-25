<?php
/*
 Plugin Name: Home Page Banner
 Plugin URI: https://github.com/wpwebguru/Home-Page-Banner
 Description: This plugin for Artmotion.com. It's a Custom Banner type plugin.
 Version: 1.0
 Author: Web Guru
 Author URI: http://wpwebguru.net/
 */
 
	define( "PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
	define("PLUGINS_URL", plugins_url());
	
	function cptui_register_my_cpts_banner() {

	/**
	 * Post Type: Banner.
	 */

			$labels = [
				"name" => __( "Banner", "astra" ),
				"singular_name" => __( "Banner", "astra" ),
			];

			$args = [
				"label" => __( "Banner", "astra" ),
				"labels" => $labels,
				"description" => "",
				"public" => true,
				"publicly_queryable" => true,
				"show_ui" => true,
				"show_in_rest" => true,
				"rest_base" => "",
				"rest_controller_class" => "WP_REST_Posts_Controller",
				"has_archive" => false,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"delete_with_user" => false,
				"exclude_from_search" => false,
				"capability_type" => "post",
				"map_meta_cap" => true,
				"hierarchical" => false,
				"rewrite" => [ "slug" => "banner", "with_front" => true ],
				"query_var" => true,
				"supports" => [ "title", "editor", "thumbnail", "comments", "author" ],
			];

			register_post_type( "banner", $args );
		}

		add_action( 'init', 'cptui_register_my_cpts_banner' );
		
		
		
		function cptui_register_my_taxes_b_category() {

	/**
	 * Taxonomy: Categories.
	 */

			$labels = [
				"name" => __( "Categories", "astra" ),
				"singular_name" => __( "Categories", "astra" ),
			];

			$args = [
				"label" => __( "Categories", "astra" ),
				"labels" => $labels,
				"public" => true,
				"publicly_queryable" => true,
				"hierarchical" => false,
				"show_ui" => true,
				"show_in_menu" => true,
				"show_in_nav_menus" => true,
				"query_var" => true,
				"rewrite" => [ 'slug' => 'b_category', 'with_front' => true, ],
				"show_admin_column" => false,
				"show_in_rest" => true,
				"rest_base" => "b_category",
				"rest_controller_class" => "WP_REST_Terms_Controller",
				"show_in_quick_edit" => false,
				];
			register_taxonomy( "b_category", [ "banner" ], $args );
		}
		add_action( 'init', 'cptui_register_my_taxes_b_category' );

