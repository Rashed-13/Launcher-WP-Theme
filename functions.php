<?php

function launcher_initial_setup() {
    load_theme_textdomain("launcher");
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
}
add_action("after_setup_theme", "launcher_initial_setup");



function launcher_assets_loading() {
    wp_enqueue_style("animate-css", get_theme_file_uri("/assets/css/animate.css"));
    wp_enqueue_style("icomoon-css", get_theme_file_uri("/assets/css/icomoon.css"));
    wp_enqueue_style("bootstrap-css", get_theme_file_uri("/assets/css/bootstrap.css"));
    wp_enqueue_style("style-css", get_theme_file_uri("/assets/css/style.css"));
    wp_enqueue_style("launcher-css", get_stylesheet_uri());

    wp_enqueue_script("easing-js", get_theme_file_uri("/assets/js/jquery.easing.1.3.js"), array('jquery'), null, true);
    wp_enqueue_script("bootstrap-js", get_theme_file_uri("/assets/js/bootstrap.min.js"), array('jquery'), null, true);
    wp_enqueue_script("jquery-waypoints-js", get_theme_file_uri("/assets/js/jquery.waypoints.min.js"), array('jquery'), null, true);
    wp_enqueue_script("simplyCountdown-js", get_theme_file_uri("/assets/js/simplyCountdown.js"), array('jquery'), null, true);
    wp_enqueue_script("main-js", get_theme_file_uri("/assets/js/main.js"), array('jquery'), time(), true);
}
add_action("wp_enqueue_scripts", "launcher_assets_loading");



function launcher_sidebar_register() {
    register_sidebar(array(
        "name"          => __("Social Media Widgets", "launcher"),
        "id"            => "social-widgets",
        'description'   => __("This widgets for setting social link in the launcher theme", "launcher")
    ));
    register_sidebar(array(
        "name"          => __("Copy Right Widgets", "launcher"),
        "id"            => "Copy-right-widgets",
        'description'   => __("This widgets for setting copy right text in the launcher theme", "launcher")
    ));
}

add_action("widgets_init", "launcher_sidebar_register");



function launcher_banner_image_adding(){
    $banner_url = get_the_post_thumbnail_url(null, "large");
    ?>
    <style>
        .launcher-banner{
            background-image: url(<?php echo $banner_url;?>);
        }
    </style>
    <?php
}
add_action("wp_head", "launcher_banner_image_adding", 20);



















?>