<?php
  require('../../../../../wp-load.php');
  require('log_change.php');

  ini_set('memory_limit','64M');
  $category = $_POST['category'];
  $terms = $_POST['terms'];
  $headline = ''; //$_POST['headline'];
  $content = ''; //$_POST['content'];
  $sort_type = $_POST['sort_type'];

  //Analyze input
  if (is_numeric($terms)) {
    search_by_id($category,$terms,$sort_type);
  }
  else {
    search_by_text($category,$terms,$headline,$content,$sort_type);
  }

  function search_by_id($category,$terms,$sort_type) {
    $today = date('Y-m-d');
    $output = new stdClass(); //Output object
    $output->msg = ' We are planning to search ' . $category . ' for the post ID ' . $terms . '. ';
    if ($sort_type === 'cat') {
      $category_obj = get_category_by_slug($category);
      $category_id = $category_obj->term_id;
      $category_name = $category_obj->name;
    }
    else if ($sort_type === 'filtered') {
      $filter_type = get_post_meta($category,'_anduril_page_filter',true);
      $category_name = get_the_title($category);
      $meta_key = '_anduril_' . $filter_type;
      $meta_value = explode(',',get_post_meta($category,'_anduril_page_filter_terms',true)); //We make an array of the terms for the search
    }
    else {
      $category_obj = get_post_types(array('name' => $category),'objects');
      $category_name = $category_obj[$category]->label;
    }
    if ($sort_type === 'cat') { //Category search: $result will be a category or CPT search depending on $srt type
      $output->msg .= ' Category ID: ' . $category_id . '. ';
      $result = get_posts(array('include' => array($terms),'category' => $category_id, 'post_type' => 'any','orderby' => 'meta_value','meta_key' => 'post_date','order' => 'DESC'));
    }
    else if ($sort_type === 'filtered') { //Filtered page search
      $post_terms = explode(',',get_post_meta($terms,$meta_key,true));
      $post_terms_alt = explode(',',get_post_meta($terms,'_anduril_page_filter_terms',true)); //For general '_anduril_page_filter_terms' meta key which links and generic posts use
      if (!empty($post_terms[0])) {
        $intersections = array_intersect($post_terms,$meta_value);
      }
      else {
        $intersections = array_intersect($post_terms_alt,$meta_value);
      }
      $result = array();
      if (count($intersections) > 0) {
        $post_to_push = get_post($terms);
        array_push($result,$post_to_push);
      }
    }
    else { //CPT search
      $result = get_posts(array('include' => array($terms), 'post_type' => $category,'orderby' => 'meta_value','meta_key' => 'post_date','order' => 'DESC'));
    }
    if (!empty($result)) {
      // $output->msg .= var_dump($result);
      $output_posts = array();
      $output_parts = new stdClass();
      foreach ($result as $row) {
        $output_parts->headline = $row->post_title;
        $output_parts->link = $row->guid;
        $output_parts->ID = $row->ID;
        $output_parts->post_type =$row->post_type;
        $output_parts->already_ranked = get_post_meta(get_the_ID(), '_anduril_' . $category . '_sort', true);
        array_push($output_posts,$output_parts);
      }
      $output->rows = $output_posts;
    }
    else {
      $output->msg .= ' Result: nil';
    }
    return_output($output,$category_name);
  }

  function search_by_text($category,$terms,$headline,$content,$sort_type) {
    $today = date('Y-m-d');
    $output = new stdClass(); //Output object
    $output->msg = ' We are planning to search ' . $category . ' for text ' . $terms . '. ';
    if ($sort_type === 'cat') {
      $category_obj = get_category_by_slug($category);
      $category_id = $category_obj->term_id;
      $category_name = $category_obj->name;
    }
    else if ($sort_type === 'filtered') {
      $category_obj = get_post($category);
      $category_id = $category_obj->ID;
      $category_name = $category_obj->post_title;
    }
    else {
      $category_obj = get_post_types(array('name' => $category),'objects');
      // echo var_dump($category_obj[$category]);
      $category_name = $category_obj[$category]->label;
    }

    $output_posts = array();

    if ($sort_type === 'cat') {
      $output->msg .= ' Category ID: ' . $category_id . '. ';
      $args = array('s' => $terms, 'cat' => $category_id, 'posts_per_page' => 100);
    }
    else {
      $args = array('s' => $terms, 'post_type' => $category, 'posts_per_page' => 100);
    }
    $the_query = new WP_Query($args);
    // $output->msg .= var_dump($the_query);

    //The Loop
    if ( $the_query->have_posts() ) {
    	while ( $the_query->have_posts() ) {
    		$the_query->the_post();
    		//
        $output_parts = new stdClass();
    		$output_parts->headline = get_the_title();
        $output_parts->link = get_the_permalink();
        $output_parts->ID = get_the_ID();
        $output_parts->post_type = get_post_type();
        $output_parts->external_link = get_post_meta(get_the_ID(), '_anduril_link', true);
        $output_parts->already_ranked = get_post_meta(get_the_ID(), '_anduril_' . $category . '_sort', true);
        array_push($output_posts,$output_parts);
    		//
    	} // end while
      wp_reset_postdata();
    } // end if
    $output->rows = $output_posts;

    return_output($output,$category_name);
  }

  // Return output
  function return_output($output,$category_name) {
    if (!empty($output->rows)) {
      // echo 'ROWS!';
      // echo var_dump($output->rows);
      $output->html = '      <table class="wp-list-table widefat fixed striped posts">
              <thead>
                <tr>
                  <td style="width: 40%">
                    <b>Title</b>
                  </td>
                  <td style="width: 10%">
                    <b>View post</b>
                  </td>
                  <td style="width: 10%">
                    <b>ID</b>
                  </td>
                  <td>
                    <b>Post Type</b>
                  </td>
                  <td>
                    <b>Rank?</b>
                  </td>
                </tr>
              </thead>';

        foreach ($output->rows as $row) { //Loop through each row object in output, build tr for each
          $view_url = $row->link; //Set the click URL for the "open" button
          if ($row->post_type === 'externallinks') { //If it's an external link, change view URL to external link meta field
            $view_url = get_post_meta($row->ID,'_anduril_external_link',true);
          }
          $output->html .= '
                <tr>
                  <td>
                    <a href="../../../../../wp-admin/post.php?post=' . $row->ID . '&action=edit" target="_blank">' . $row->headline . '</a>
                  </td>
                  <td>
                    <a class="button" href="' . $view_url . '" target="_blank">Open</a>
                  </td>
                    <td>
                      ' . $row->ID . '
                    </td>
                    <td>
                      ' . $row->post_type . '
                    </td>
                    <td>';

                    if (empty($row->already_ranked) || intval($row->already_ranked) > MASTER_SORT_NUMBER) {
                      $output->html .= '<span class="button" onclick="rankPost(' . $row->ID . ')">Add</span>';
                    }
                    else {
                      $output->html .= $row->already_ranked;
                    }

        $output->html .=    '</td>
                </tr>
                ';
        }

        $output->html .= '
      </table>';
    }
    else {
      $output->html = '<h3>No results found in category ' . $category_name . '.</h3><p>Maybe try another category. ALSO: This search only returns posts with air dates of today or earlier.</p>';
    }
    echo json_encode($output);
  }
?>
