<?php
  require('../../../../../wp-load.php');
  require('log_change.php');

  $post_id = $_POST['post_id'];
  $category = $_POST['category'];
  echo 'We have been told to unrank item '. $post_id . ' from category ' . $category;
  $category_obj = get_term_by('name', $category, 'category');
  $category_id = $category_obj->term_id;
  $category_sort = '_anduril_' . $category . '_sort';
  update_post_meta($post_id,$category_sort,1000); //We set the rank for this category to 1000, effectively keeping it off our ranked page
  log_change($user,'unrank item',$category,get_the_title($post_id),$post_id);

  //No we do a query to find other ranked posts and update their meta data
  $args = array(
    'posts_per_page'   => -1,
    'orderby'          => 'meta_value_num',
    'order'            => 'ASC',
    'meta_key'         => $category_sort,
    'post_type'        => 'any',
    'post_status'      => 'publish',
    'suppress_filters' => true,
    'meta_query'       => array(
      array(
        'key'          => $category_sort,
        'value'        => 1000,
        'type'    => 'numeric',
        'compare'      => '<'
      ),
      array(
        'key'          => $category_sort,
        'value'        => '',
        'compare'      => '!='
      )
    )
  );
  $posts_array = get_posts($args);
  $x = 1;
  foreach ($posts_array as $item) {
    $post_cats = wp_get_post_categories($item->ID);
    if (array_search($category_id,$post_cats) === false) { //Current category is not on post, so unrank it
      update_post_meta($item->ID,$category_sort,1000);
    }
    if ($item->ID != $post_id) {
      update_post_meta($item->ID,$category_sort,$x);
      $x++;
    }
  }
?>
