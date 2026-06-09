<?php

add_action('graphql_register_types', function () {

    register_graphql_field('Project', 'projectCategory', [
        'type' => 'String',
        'resolve' => function($post) {
            return get_post_meta($post->ID, 'project_category', true);
        }
    ]);

    register_graphql_field('Project', 'projectLocation', [
        'type' => 'String',
        'resolve' => function($post) {
            return get_post_meta($post->ID, 'project_location', true);
        }
    ]);

    register_graphql_field('Project', 'projectPrice', [
        'type' => 'String',
        'resolve' => function($post) {
            return get_post_meta($post->ID, 'project_price', true);
        }
    ]);

    register_graphql_field('Project', 'projectStatus', [
        'type' => 'String',
        'resolve' => function($post) {
            return get_post_meta($post->ID, 'project_status', true);
        }
    ]);

});