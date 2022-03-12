<?php

	class news10_custom_post_type {
		
		function __construct() {
			
			add_action('init', array(&$this,'news10_builder_post_type'));
			add_action('init', array(&$this,'create_builder_post_taxonomy'));
  

        }
	  // Builder Post Type
		function news10_builder_post_type() {
        $labels = array(
            'name' => __('News10 Builder', 'news10'),
            'singular_name' => __('News10 Builder', 'news10'),
            'add_new' => __('Add news10 builder', 'news10'),
            'add_new_item' => __('Add news10 builder', 'news10'),
            'edit_item' => __('Edit news10 builder', 'news10'),
            'new_item' => __('New news10 builder', 'news10'),
            'all_items' => __('All news10 builder', 'news10'),
            'view_item' => __('View news10 builder', 'news10'),
            'search_items' => __('Search news10 builder', 'news10'),
            'not_found' => __('No news10 builder found', 'news10'),
            'not_found_in_trash' => __('No portfolio found in the trash', 'news10'),
            'parent_item_colon' => '',
            'menu_name' => __('News10 Theme Builder', 'news10')
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-admin-multisite',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt','elementor'),
            'has_archive' => false,
        );
            register_post_type('news10_builders', $args);
        }

        function create_builder_post_taxonomy() {
            $labels = array(
                'name' => __('Category', 'news10'),
                'singular_name' => __('Category', 'news10'),
                'search_items' => __('Search categories', 'news10'),
                'all_items' => __('Categories', 'news10'),
                'parent_item' => __('Parent category', 'news10'),
                'parent_item_colon' => __('Parent category:', 'news10'),
                'edit_item' => __('Edit category', 'news10'),
                'update_item' => __('Update category', 'news10'),
                'add_new_item' => __('Add category', 'news10'),
                'new_item_name' => __('New category', 'news10'),
                'menu_name' => __('Category', 'news10'),
            );
            $args = array(
                'labels' => $labels,
                'hierarchical' => true,
                'show_ui' => true,
                'show_admin_column' => true,
                'rewrite' => array('slug' => 'news10_builder_cat'),
            );
            register_taxonomy('news10_builder_cat', 'news10_builders', $args);
        }

  

 



   
					
	}  

    new news10_custom_post_type();

