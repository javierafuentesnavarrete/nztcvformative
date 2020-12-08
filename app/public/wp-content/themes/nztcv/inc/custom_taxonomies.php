<?php
function projects_register_taxonomy_project_region()
{
    $labels = array(
        'name'              => _x('Projects Regions', 'taxonomy general name'),
        'singular_name'     => _x('Projects Region', 'taxonomy singular name'),
        'search_items'      => __('Search Projects Regions'),
        'all_items'         => __('All Project Regions'),
        'parent_item'       => __('Parent Projects Region'),
        'parent_item_colon' => __('Parent Projects Region:'),
        'edit_item'         => __('Edit Projects Region'),
        'update_item'       => __('Update Projects Region'),
        'add_new_item'      => __('Add New Projects Region'),
        'new_item_name'     => __('New Projects Region Name'),
        'menu_name'         => __('Projects Region'),
    );
    $args = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'project_region'],
    );
    register_taxonomy('project_region', ['projects_region'], $args);
}

add_action('init', 'projects_register_taxonomy_project_region');
