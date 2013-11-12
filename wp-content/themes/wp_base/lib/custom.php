<?php

function roots_get_post_name() {
  // If we're currenlty in a post type archive, return the post type name
  if ( is_post_type_archive() ) {
    $post_type_obj = get_queried_object();
    return $post_type_obj->name;
  }

  global $wp_query;
  wp_reset_postdata();
  return $wp_query->post->post_name;
}

function roots_get_post_parent_name() {
  global $wp_query;
  $parent = get_post($wp_query->post->post_parent);
  return $parent->post_name;
}

function roots_get_post_parent_title() {
  global $wp_query;
  $parent = get_post($wp_query->post->post_parent);
  return $parent->post_title;
}

function roots_get_template_part( $slug, $name = null, $data = array(), $returnContent=false ) {
  do_action( "get_template_part_{$slug}", $slug, $name );

  $templates = array();
  if ( isset($name) )
    $templates[] = "{$slug}-{$name}.php";

  $templates[] = "{$slug}.php";

  $filename = locate_template($templates, false, false);

  if(!empty($filename)) {

    if($returnContent) {
      ob_start();
    }

    extract($data);
    include $filename;

    if($returnContent) {
      return ob_get_clean();
    }
  }
}

function roots_get_category_id($cat_name){
  $cat_name = str_replace("&", "&amp;", $cat_name);
  $term = get_term_by('name', $cat_name, 'category');
  return $term->term_id;
}

function jdc_excerpt_more($more) {
  return ' &hellip;';
}

add_filter('excerpt_more', 'jdc_excerpt_more');

function get_category_id($cat_name){
  $cat_name = str_replace("&", "&amp;", $cat_name);
  $term = get_term_by('name', $cat_name, 'category');
  return $term->term_id;
}

function roots_count_posts() {

  $query = new WP_Query(array('posts_per_page' => -1));
  return $query->post_count;
}