<?php

function register_project_meta_fields() {

    $fields = [
        'project_category',
        'project_location',
        'project_price',
        'project_status',
    ];

    foreach ($fields as $field) {

        register_post_meta('project', $field, [
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',

            // WPGraphQL
            'show_in_graphql' => true,
        ]);
    }
}

add_action('init', 'register_project_meta_fields');
function project_meta_box() {

    add_meta_box(
        'project_details',
        'Project Details',
        'project_meta_callback',
        'project'
    );
}

add_action('add_meta_boxes', 'project_meta_box');
function project_meta_callback($post) {

    $category = get_post_meta($post->ID, 'project_category', true);
    $location = get_post_meta($post->ID, 'project_location', true);
    $price = get_post_meta($post->ID, 'project_price', true);
    $status = get_post_meta($post->ID, 'project_status', true);

    ?>

    <p>
        <label>Category</label><br>
        <input type="text" name="project_category" value="<?php echo esc_attr($category); ?>">
    </p>

    <p>
        <label>Location</label><br>
        <input type="text" name="project_location" value="<?php echo esc_attr($location); ?>">
    </p>

    <p>
        <label>Price</label><br>
        <input type="text" name="project_price" value="<?php echo esc_attr($price); ?>">
    </p>

    <p>
        <label>Status</label><br>
        <input type="text" name="project_status" value="<?php echo esc_attr($status); ?>">
    </p>

    <?php
}
function save_project_meta($post_id) {

    $fields = [
        'project_category',
        'project_location',
        'project_price',
        'project_status',
    ];

    foreach ($fields as $field) {

        if (isset($_POST[$field])) {
            update_post_meta(
                $post_id,
                $field,
                sanitize_text_field($_POST[$field])
            );
        }
    }
}

add_action('save_post_project', 'save_project_meta');