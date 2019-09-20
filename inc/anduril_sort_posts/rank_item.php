<?php
  require('../../../../../wp-load.php');
  require('log_change.php');

  $post_id = $_POST['post_id'];
  $category = $_POST['category'];
  echo 'We have received orders to rank item '. $post_id . ' in category ' . $category;
  $category_sort = '_anduril_' . $category . '_sort';
  log_change($user,'rank item',$category,get_the_title($post_id),$post_id);
  update_post_meta($post_id,$category_sort,1);

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
  $x = 2;
  foreach ($posts_array as $item) {
    $post_cats = wp_get_post_categories($item->ID);
    if ($item->ID != $post_id) {
      update_post_meta($item->ID,$category_sort,$x);
      $x++;
    }
  }
?>
