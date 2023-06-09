<?php
    // Site setup

    function setup() {
        wp_enqueue_style("style", get_stylesheet_uri(), NULL, microtime(), 'all');
        wp_enqueue_style("fontawesome", "//kit.fontawesome.com/d72796dfa5.js");
        wp_enqueue_style("google-fonts", "//fonts.googleapis.com/css2?family=Montserrat&display=swap");
    }

    add_action('wp_enqueue_scripts', 'setup');

    function init() {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'init');

    function custom_post_type() {
        register_post_type('program',
            array(
                'rewrite' => array('slug' => 'program'),
                'taxonomies' => array('category', 'post-tag'),
                'labels' => array(
                    'name' => 'Programs',
                    'add_new_item' => 'Add New Project',
                    'edit_item' => 'Edit Project'
                ),
                'menu-icon' => 'dashicons-clipboard',
                'public' => true,
                'has_archive' => true,
                'supports' => array(
                    'title', 'thumbnail', 'editor', 'excerpt'
                )
            )
        );

        register_post_type('upcoming-event',
            array(
                'rewrite' => array('slug' => 'upcoming-event'),
                'taxonomies' => array('category', 'post_tag'),
                'labels' => array(
                    'name' => 'Upcoming Events',
                    'add_new_item' => 'Add New Upcoming Event',
                    'edit_item' => 'Edit Upcoming Event'
                ),
                'menu-icon' => 'dashicons-calendar-alt',
                'public' => true,
                'has_archive' => true,
                'supports' => array(
                    'title', 'thumbnail', 'editor', 'excerpt'
                )
            )
        );

        register_post_type('past-event',
        array(
            'rewrite' => array('slug' => 'past-event'),
            'taxonomies' => array('category', 'post_tag'),
            'labels' => array(
                'name' => 'Past Events',
                'add_new_item' => 'Add New Past Event',
                'edit_item' => 'Edit Past Event'
            ),
            'menu-icon' => 'dashicons-calendar-alt',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt'
            )
        )
    );
    }

    add_action('init', 'custom_post_type');
    
?>