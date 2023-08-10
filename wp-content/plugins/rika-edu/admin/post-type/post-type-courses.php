<?php

/**
 * Fired during plugin activation
 *
 * @link       https://hrtechnotes.com
 * @since      1.0.0
 *
 * @package    Rika_Edu
 * @subpackage Rika_Edu/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Rika_Edu
 * @subpackage Rika_Edu/includes
 * @author     HR Foundation <hemalrika@gmail.com>
 */
class Rika_Course_Post_type {
    public function __construct() {
        add_action("init", [$this, "rika_all_courses_post_type"]);
    }
    function rika_all_courses_post_type() {
        /**
         * Post type for all courses
         */
        $labels = [
            "name" => esc_html__( "Courses", "my-plugin" ),
            "singular_name" => esc_html__( "Course", "my-plugin" ),
            "all_items" => esc_html__( "My Courses", "my-plugin" ),
            "add_new" => esc_html__( "New Course", "my-plugin" ),
            "featured_image" => esc_html__( "Course Cover", "my-plugin" ),
        ];
    
        $args = [
            "label" => esc_html__( "Courses", "my-plugin" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "rest_namespace" => "wp/v2",
            "has_archive" => false,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "can_export" => false,
            "rewrite" => [ "slug" => "book", "with_front" => true ],
            "query_var" => true,
            "supports" => [ "title", "editor", "thumbnail", "excerpt" ],
            "show_in_graphql" => false,
        ];
    
        register_post_type( "book", $args );
    }
}

new Rika_Course_Post_type();