<?php /* 404 template */
  $use_anduril_template = 'default-template';
  include(get_template_directory() . '/index.php');

  function get_search_results() {
    if (isset($_GET['s'])) {
      return run_search($_GET['s']);
    }
    else {
      return '<h1>Error: No search term</h1>';
    }
  }

  function run_search($term) {
    $output = '';
    $args = array(
      'posts_per_page'   => 100,
      's'                => $term,
      'offset'           => 0,
      'orderby'         => array('date' => 'DESC'),
      'post_type'        => 'any',
      'post_status'      => array('publish'),
      'post_type'        => array('post','greatreads'),
      'suppress_filters' => true
    );
    $posts_array = get_posts($args);

    foreach($posts_array as $post) {
      $output .= '<a href="' . get_permalink($post) . '"><p>' . $post->post_title . '</p></a>';
    }
    return $output;
  }
