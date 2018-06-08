<?php
/**
 * Created by PhpStorm.
 * User: Georgii
 * Date: 6/5/2018
 * Time: 1:03 PM
 */

function add_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'add_resources');



// Get top ancestor
function get_top_ancestor_id(){

    global $post;

    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
};

// Does page have children
function has_children(){

    global $post;

    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);

}

// Customize excerpt word count length
function custom_excerpt_length(){
    return 50;
}

add_filter('excerpt_length','custom_excerpt_length');



// Theme setup
function themetutorial_setup(){

    //Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));

    // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 150, true);
    add_image_size('banner-image', 920, 210, array('center', 'bottom'));

    // Add post format support
    // There is nine formats of the post: aside, gallery, link, image, quote, status, video, audio and chat
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'video'));

    // Add Widgets

}

add_action('after_setup_theme', 'themetutorial_setup');

// Add Widgets Locations
function widgetInit(){

    register_sidebar(array(
        'name' => 'Right Sidebar',
        'id' => 'sidebar1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="my-special-class">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Footer Area 1',
        'id' => 'footer1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="my-special-class">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Footer Area 2',
        'id' => 'footer2',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="my-special-class">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Footer Area 3',
        'id' => 'footer3',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="my-special-class">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Footer Area 4',
        'id' => 'footer4',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="my-special-class">',
        'after_title' => '</h4>'
    ));

}

add_action('widgets_init', 'widgetInit');