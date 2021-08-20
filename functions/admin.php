<?php
add_action('init', function () {
    register_post_type(
        'info',
        array(
            'labels' => array(
                'name' => __('Information'),
                'singular_name' => __('info')
            ),
            'rewrite' => array(
                'slug' => 'info',
                'with_front' => false,
            ),
            'hierarchical' => false,
            'has_archive' => true,
            'menu_position' => 30,
            'public' => true,
            "supports" => ['title', 'editor', 'thumbnail'],
            'show_in_rest' => true,
        )
    );

    flush_rewrite_rules();
});

