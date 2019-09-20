<?php
  require('../../../../../wp-load.php');
  require('log_change.php');

  $category = $_POST['category'];
  echo 'We have been told to unrank all items from category ' . $category;
  $category_sort = '_anduril_' . $category . '_sort';

  log_change($user,'unrank all',$category);

  //So we do a query to find all ranked posts and update their meta data
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
  foreach ($posts_array as $item) {
    update_post_meta($item->ID,$category_sort,1000);
  }
?>
