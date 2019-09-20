<?php /* 404 template */
  $use_anduril_template = 'default-template';
  include(get_template_directory() . '/index.php');

  function get_404_message() {
    $msg = '
      <div class="singleColumnMargin">
        <div class="container-fluid" id="msg404">
          <div class="row">
            <div class="col-sm-12">
              <h1>Well this is somewhat embarrassing, isn’t it?</h1>
              <p>It seems we can’t find what you’re looking for. Perhaps searching, or one of the links below, can help.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h1>Search</h1>
              <input class="form-control" id="smtSearch" type="text" style="max-width: 400px" /> <button style="margin-top: 15px" class="moreButton" onclick="doSearch()">Go</button>
            </div>
          </div>
        </div>
      </div>';
    return $msg;
  }

  function get_recent_posts() {
    $output = '';
    $args = array(
      'posts_per_page'   => 10,
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
?>

<div id="recentPosts">
  <div class="row">
    <div class="col-sm-12">
      <h1>Recent posts</h1>
      <?= get_recent_posts(); ?>
    </div>
  </div>
</div>

<script>
  jQuery(document).ready(function($) {
    $('.addtoany_share_save_container').hide();
    $('#msg404').append($('#recentPosts'));
    //Search on enter key
    let input = $('#smtSearch');
    input.keyup(function(event) {
      event.preventDefault();
      if (event.keyCode === 13) {
        $('.moreButton').click();
      }
    });
  });

  function doSearch() {
    let term = jQuery('#smtSearch').val();
    if (term != '') {
      window.location.href = '/?s=' + term;
    }
  }
</script>
