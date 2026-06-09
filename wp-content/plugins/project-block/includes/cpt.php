<?php

function register_project_cpt() {

    register_post_type('project', [
        'label' => 'Projects',
        'public' => true,
        'show_in_rest' => true,
        'supports' => ['title', 'editor'],
        
        // WPGraphQL
        'show_in_graphql' => true,
        'graphql_single_name' => 'Project',
        'graphql_plural_name' => 'Projects',
    ]);
}

add_action('init', 'register_project_cpt');