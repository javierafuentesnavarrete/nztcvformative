<?php
function project_custom_post_type()
{
    register_post_type(
        'projects_region',
        array(
            'labels' => array(
                'name' => __('Projects', 'textdomain'),
                'singular_name' => __('Project', 'textdomain'),
                'add_new_item' => __('Add Project'),
            ),
            'public'      => true,
            'has_archive' => 'projects',
            'menu_position' => 5,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'project_custom_post_type');
