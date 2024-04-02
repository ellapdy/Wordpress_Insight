<?php

function insight_custom_post(){
    $servicesPost_label = array(
        'name'          => __('Services Post','textdomain'),
        'singular_name' => __('Services Post','textdomain'),
        'add_new'       => __('Add Services Post', 'textdomain'),
        'add_new_item'  => __('Add new Services Post', 'textdomain'),
        'edit_item'     => __('Edit Services Post', 'textdomain'),
        'all_items'     => __('Services Post', 'textdomain'),
    );

    $servicesPost_args = array(
        'labels'            => $servicesPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('servicesPost', $servicesPost_args);

    $projectsPost_label = array(
        'name'          => __('Projects Post','textdomain'),
        'singular_name' => __('Projects Post','textdomain'),
        'add_new'       => __('Add Projects Post', 'textdomain'),
        'add_new_item'  => __('Add new Projects Post', 'textdomain'),
        'edit_item'     => __('Edit Projects Post', 'textdomain'),
        'all_items'     => __('Projects Post', 'textdomain'),
    );

    $projectsPost_args = array(
        'labels'            => $projectsPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('projectsPost', $projectsPost_args);

}

add_action('init', 'insight_custom_post');