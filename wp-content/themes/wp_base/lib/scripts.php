<?php

function @@THEME_FOLDER_NAME@@_scripts() {

  if (is_child_theme()) {

    wp_enqueue_style('roots_app', get_stylesheet_directory_uri() . '/assets/css/main.css', false, null);
  }

  // jQuery is loaded in header.php using the same method from HTML5 Boilerplate:
  // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '', '', '1.8.2', false);
    wp_register_script('typekit', '', '', '1.0.0', false);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  if (is_child_theme()) {
    // ##
    //    grab child theme specific js
    // ##
    wp_register_script('child_plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.js', false, null, false);
    wp_register_script('child_main', get_stylesheet_directory_uri() . '/assets/js/main.js', false, null, false);
    // register other custom scripts here...
    wp_register_script('child_carousel', get_stylesheet_directory_uri() . '/bower_components/bootstrap-sass/js/carousel.js', false, null, false);
    wp_register_script('child_dropdown', get_stylesheet_directory_uri() . '/bower_components/bootstrap-sass/js/dropdown.js', false, null, false);
    wp_register_script('child_transition', get_stylesheet_directory_uri() . '/bower_components/bootstrap-sass/js/transition.js', false, null, false);

    wp_enqueue_script('child_plugins');
    wp_enqueue_script('child_main');
    // enqueue other custom scripts here...
    wp_enqueue_script('child_carousel');
    wp_enqueue_script('child_dropdown');
    wp_enqueue_script('child_transition');
  }
}

add_action('wp_enqueue_scripts', '@@THEME_FOLDER_NAME@@_scripts', 100);